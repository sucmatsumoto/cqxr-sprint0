<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserManagement;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Support\Facades\DB;

class UserRegistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Log::info("!!!! call UserRegistController");
        // $user = new \App\Components\User();
        // $user->csvImport($request);
        // $r = array();
        // return response()->json($r);
        return view('index');

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
        // dd($request->all());
        $request->file('file')->storeAs('','regist.csv');
        $csv = Storage::disk('local')->get("regist.csv");
        $csv = str_replace(array("\r\n", "\r"), "\n", $csv);
        $uploadedData = collect(explode("\n", $csv));

        // $um = new UserManagement();
        foreach($uploadedData as $v){
            $v2 = explode(",", $v);
            $um = UserManagement::create([
                    'last_name'             => $v2[0],
                    'first_name'            => $v2[1],
                    'last_name_kana'        => $v2[2],
                    'first_name_kana'       => $v2[3],
                    'mail_address_dacc'     => $v2[4],
                    'mail_address_apple'    => $v2[5],
                    'tel_number'            => $v2[6],
                    'belong_organization'   => $v2[7],
                    'position'              => $v2[8],
            ]);
            $um->save();
            
        }
        // $path = $spath.$request->file('csvdata')->storeAs('',$orgName);


        // //
        // Log::info("!!!! store");
        // $r = array();
        // return response()->json($r);
        return redirect('user_management');

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
