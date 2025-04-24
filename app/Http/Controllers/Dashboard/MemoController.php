<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($trip_id)
    {
        $trip = Trip::findOrFail($trip_id);
        $memos = $trip->memos()->paginate(8);

        return view('dashboard.memos.index', compact('trip', 'memos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($trip_id)
    {
        $trip_title = Trip::where('id', $trip_id)->firstOrFail()->title;

        return view('dashboard.memos.create', compact('trip_id', 'trip_title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
