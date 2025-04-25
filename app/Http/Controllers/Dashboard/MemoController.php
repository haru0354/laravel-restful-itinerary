<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Memo;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $trip_title = Trip::findOrFail($trip_id)->title;

        return view('dashboard.memos.create', compact('trip_id', 'trip_title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $trip_id)
    {
        $user_id = Auth::id();

        Memo::create([
            'user_id' => $user_id,
            'trip_id' => $trip_id,
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return to_route('dashboard.trips.memos.index', ['trip_id' => $trip_id]);
    }

    /**
     * Display the specified resource.
     */
    public function show($trip_id, $memo_id)
    {
        $trip_title = Trip::findOrFail($trip_id)->title;
        $memo = Memo::findOrFail($memo_id);

        return view('dashboard.memos.show', compact('trip_title', 'memo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($trip_id, $memo_id)
    {
        $trip_title = Trip::findOrFail($trip_id)->title;
        $memo = Memo::findOrFail($memo_id);

        return view('dashboard.memos.edit', compact('trip_title', 'memo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $trip_id, $memo_id)
    {
        $memo = Memo::findOrFail($memo_id);

        $memo->title = $request->title;
        $memo->content = $request->content;
        $memo->save();

        return to_route('dashboard.trips.memos.show', ['trip_id' => $trip_id, 'memo_id' => $memo_id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
