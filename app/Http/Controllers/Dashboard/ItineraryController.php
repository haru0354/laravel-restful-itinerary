<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Itinerary;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItineraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($trip_id)
    {
        $trip_title = Trip::findOrFail($trip_id)->title;

        return view('dashboard.itineraries.create', compact('trip_id', 'trip_title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $trip_id)
    {
        $user_id = Auth::id();

        Itinerary::create([
            'user_id' => $user_id,
            'trip_id' => $trip_id,
            'date_and_time' => $request->date_and_time,
            'title' => $request->title,
            'content' => $request->content,
            'hide_content' => $request->hide_content,
        ]);

        return to_route('dashboard.trips.show', ['trip_id' => $trip_id]);
    }
    /**
     * Display the specified resource.
     */
    public function show($trip_id, $itinerary_id)
    {
        $trip_title = Trip::findOrFail($trip_id)->title;
        $itinerary = Itinerary::findOrFail($itinerary_id);

        return view('dashboard.itineraries.show', compact('trip_title', 'itinerary'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($trip_id, $itinerary_id)
    {
        $trip_title = Trip::findOrFail($trip_id)->title;
        $itinerary = Itinerary::findOrFail($itinerary_id);

        return view('dashboard.itineraries.edit', compact('trip_title', 'itinerary'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $trip_id, $itinerary_id)
    {
        $itinerary = Itinerary::findOrFail($itinerary_id);

        $itinerary->date_and_time = $request->date_and_time;
        $itinerary->title = $request->title;
        $itinerary->content = $request->content;
        $itinerary->hide_content = $request->hide_content;
        $itinerary->save();

        return to_route('dashboard.trips.show', ['trip_id' => $trip_id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
