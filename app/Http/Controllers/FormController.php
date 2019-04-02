<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use DB;
class FormController extends Controller
{
    public function store(Request $request)

    {

        $this->validate($request, [

                'filename' => 'required',
                'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ]);

        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'uploads/images/', $name);
                $data[] = $name;
            }
         }



         $form= new Form();
         $form->filename=json_encode($data);


        //$form->save();


       // dd($form);
       // $form->save();
        return back()->with('success', 'Your images has been successfully');
    }

    function insert (Request $req) {

        $userid = $req ->input('userid');

        $data = array('userid'=>$userid);

        DB::table ('forms')->insert ($data);

    }

    public function test(){
    	return view('test', array('user' => Auth::user()) );
    }
}
