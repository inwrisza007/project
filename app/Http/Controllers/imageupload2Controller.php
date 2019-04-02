<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use db;
use App\user;
use auth;
use Image;
use App\form;

class imageupload2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imageUpload2.create');
    }

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

    public function imageUpload3()

    {

        return view('imageUpload2.create');

    }

    public function imageUploadPost3(Request $request)

    {

        request()->validate([

            'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => ['required', 'string', 'max:255'],

        ]);


        if($request->hasFile('filename')){
            $filenameWithExt = $request->file('filename')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('filename')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('filename')->move('uploads/user/',$fileNameToStore);
          }

          $data = new form();
          if($request->hasFile('filename')){
            $data->filename = $fileNameToStore;
          }
          $data->userid = Auth::user()->id;
          $data->type = 2;


          //dd($data);
          $data->save();

         return view ('imageupload/index');


    }
}
