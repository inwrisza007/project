<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\member;
use auth;
class MregisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('/mregister');
    }
    function insert (Request $req) {

        
        $name = $req ->input('name');
        $email = $req ->input('email');
        $phonenumber = $req ->input('phonenumber');
        $userid = $req ->input('userid');
        $password =$req -> input('password');
        $data = array('name'=>$name,'email'=>$email,'phonenumber'=>$phonenumber,'userid'=>$userid,'password'=>$password);

        DB::table ('member')->insert ($data);
        dd($data);
        //return view ('/home');
    }
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
