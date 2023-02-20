<?php

namespace App\Http\Controllers\Room;

use Illuminate\Http\Request;
use App\Models\TeamworkRoom;
use App\Models\CollaborationRoom;
use App\Http\Controllers\Controller;

class RoomListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('room_list');
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
        $duns_number = $request->input("duns_number");
        $t_room = TeamworkRoom::whereduns_number($duns_number)->first();
        $c_room = CollaborationRoom::whereduns_number($duns_number)->first();

        $response = array("TeamworkRooms" => array(),"CollaborationRooms" => array());

        $t['room_id'] = $t_room['teamwork_room_id'];
        $t['object_id'] = $t_room['object_id'];
        $t['room_name'] = $t_room['room_name'];
        $t['capacity'] = $t_room['capacity'];
        $t['duns_number'] = $t_room['duns_number'];

        $c['room_id'] = $c_room['collaboration_room_id'];
        $c['room_name'] = $c_room['room_name'];
        $c['capacity'] = $c_room['capacity'];
        $c['duns_number'] = $c_room['duns_number'];
        $c['object_id'] = $c_room['object_id'];

        array_push($response["TeamworkRooms"],$t);
        array_push($response["CollaborationRooms"],$c);
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
