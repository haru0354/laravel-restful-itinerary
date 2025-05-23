<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\TripRequest;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();

        $trips = Trip::where('user_id', $userId)
            ->select('id', 'start_date', 'end_date', 'title', 'destination')
            ->orderBy('start_date', 'asc')
            ->paginate(9);

        return view('dashboard.trips.index', compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.trips.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TripRequest $request)
    {
        $userId = Auth::id();

        Trip::create([
            'user_id' => $userId,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'title' => $request->title,
            'destination' => $request->destination,
        ]);

        return to_route('dashboard.trips.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($trip_id)
    {
        $trip = Trip::findOrFail($trip_id);

        $groupedItineraries = $trip->itineraries
            ->sortBy('date_and_time')
            ->groupBy(function ($itinerary) {
                return \Carbon\Carbon::parse($itinerary->date_and_time)->format('Y-m-d');
            });
            
        return view('dashboard.trips.show', compact('trip', 'groupedItineraries'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $trip_id)
    {
        $trip = Trip::findOrFail($trip_id);

        return view('dashboard.trips.edit', compact('trip'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TripRequest $request, string $trip_id)
    {
        $trip = Trip::findOrFail($trip_id);

        $trip->start_date = $request->start_date;
        $trip->end_date = $request->end_date;
        $trip->title = $request->title;
        $trip->destination = $request->destination;
        $trip->save();

        return to_route('dashboard.trips.show', ['trip_id' => $trip->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $trip_id)
    {
        $trip = Trip::findOrFail($trip_id);
        $trip->delete();

        return to_route('dashboard.trips.index');
    }
}
