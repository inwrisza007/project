<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use db;
use App\user;
use auth;
use Image;
use App\form;

class memberController extends Controller
{
    public function index()
    {

        $member = \Illuminate\Support\Facades\DB::table('users')->get();

        return view ('allmember/index',compact('member'));


    }

    public function test()
    {
      // $id = 3;
      // $data = ['store_id' => Stores::find($id)];
      // return $data;
      //$form = Form::where('userid', Auth::user()->id);
      $form = \Illuminate\Support\Facades\DB::table('forms')->where('userid', Auth::user()->id )->get();
      return view ('allmember.test',compact('form'));
      //return view('imageupload.index',compact('form'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function show($id)
    {
        //
    }


    public function destroy($id)
    {
        $member=User::find($id);
        $member->delete();
        return view('/admin');
    }

}
