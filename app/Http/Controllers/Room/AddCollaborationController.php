<?php

namespace App\Http\Controllers\Room;

use Illuminate\Http\Request;
use App\Models\TeamworkRoom;
use App\Models\CollaborationRoom;
use App\Http\Controllers\Controller;

class AddCollaborationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('add_collaboration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room_name = $request->input("room_name");
        $capacity  = $request->input("capacity");
        $duns_number  = $request->input("duns_number");
        $object_id = $request->input("object_id");



        $room = CollaborationRoom::create([
            'room_name'             => $room_name,
            'capacity'              => $capacity,
            'duns_number'           => $duns_number,
            'object_id'             => $object_id,
        ]);
        $room->save();

        $addroom = CollaborationRoom::wherecollaboration_room_id($room->id)->first();
        $response['room_id'] = $addroom['collaboration_room_id'];
        $response['object_id'] = $addroom['object_id'];
        $response['room_name'] = $addroom['room_name'];
        $response['capacity'] = $addroom['capacity'];
        $response['duns_number'] = $addroom['duns_number'];


        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
