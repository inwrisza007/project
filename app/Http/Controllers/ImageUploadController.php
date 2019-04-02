<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use db;
use App\user;
use auth;
use Image;
use App\form;






class ImageUploadController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */
    public function index()
    {
      // $id = 3;
      // $data = ['store_id' => Stores::find($id)];
      // return $data;
      //$form = Form::where('userid', Auth::user()->id);
      $form = \Illuminate\Support\Facades\DB::table('forms')->where('userid', Auth::user()->id )->get();
      return view ('imageupload.index',compact('form'));
      //return view('imageupload.index',compact('form'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function index1()
    {
      // $id = 3;
      // $data = ['store_id' => Stores::find($id)];
      // return $data;
      //$form = Form::where('userid', Auth::user()->id);
      $form = \Illuminate\Support\Facades\DB::table('forms')->where('userid', Auth::user()->id )->get();
      return view ('imageupload.index1',compact('form'));
      //return view('imageupload.index',compact('form'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('imageUpload.create');
    }




    public function imageUpload()

    {

        return view('imageUpload.create');

    }
    public function imageUpload2()

    {

        return view('imageUpload.upload');

    }

    public function show(form $forms)

  {
    $forms = \Illuminate\Support\Facades\DB::table('forms')->where('userid', Auth::user()->id )->get();

    return view('imageupload.show',compact('forms'));
  }

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function imageUploadPost(Request $request)

    {

        request()->validate([

            'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        if($request->hasFile('filename')){
            $filenameWithExt = $request->file('filename')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('filename')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('filename')->move('uploads/images/',$fileNameToStore);
          }

          $data = new form();
          if($request->hasFile('filename')){
            $data->filename = $fileNameToStore;
          }
          $data->userid = Auth::user()->id;
          $data->type = 1;
          $data->save();

          return view ('imageupload/index');


    }
    public function upload2(Request $request)

    {

        request()->validate([

            'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        if($request->hasFile('filename')){
            $filenameWithExt = $request->file('filename')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('filename')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('filename')->move('uploads/images/',$fileNameToStore);
          }

          $data = new form();
          if($request->hasFile('filename')){
            $data->filename = $fileNameToStore;
          }
          $data->userid = Auth::user()->id;
          $data->type = 2;
          $data->save();

          return view ('imageupload/index');


    }

}
