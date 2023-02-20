<?php

namespace App\Http\Controllers\Room;

use Illuminate\Http\Request;
use App\Models\TeamworkRoom;
use App\Models\CollaborationRoom;
use App\Http\Controllers\Controller;

class UpdateNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('update_name');
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
        $room_id = $request->input("room_id");
        $new_name  = $request->input("new_name");
        CollaborationRoom::wherecollaboration_room_id($room_id)->update(['room_name' => $new_name]);
        $room = CollaborationRoom::wherecollaboration_room_id($room_id)->first();

        // $room->room_name = $new_name;
        // $room->save();

        $response['room_id'] = $room['collaboration_room_id'];
        $response['room_name'] = $room['room_name'];
        $response['capacity'] = $room['capacity'];
        $response['duns_number'] = $room['duns_number'];
        $response['object_id'] = $room['object_id'];

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
