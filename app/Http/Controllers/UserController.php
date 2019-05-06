<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use db;
use App\User;
use auth;
use Image;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        $test = \Illuminate\Support\Facades\DB::table('users')->where('id', Auth::user()->id )->get();
        //dd($user);
         return view ('/userinfo',compact('test'));

    }

    public function index3()
    {
        $test = \Illuminate\Support\Facades\DB::table('users')->where('id', Auth::user()->id )->get();
        //dd($user);
         return view ('/profile',compact('test'));

    }
    public function index2()
    {

        $line = \Illuminate\Support\Facades\DB::table('users')->where('parent_id', Auth::user()->id )->get();

        return view('/line', compact('line'));
    }

    public function member()
    {

        $member = \Illuminate\Support\Facades\DB::table('users')->get();

        return view ('allmember/member',compact('member'));


    }

    public function image()
    {
        $image = \Illuminate\Support\Facades\DB::table('forms')->where('userid', Auth::user()->id )->get();
        //dd($user);
         return view ('allmember/member',compact('image'));

    }
    public function index()
    {
        $users = User::whereNull('approved_at')->get();

        return view('users', compact('users'));
    }


    public function approve($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->update(['approved_at' => now()]);

        return redirect()->route('admin.users.index')->withMessage('User approved successfully');
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

    public function profile(){
    	return view('profile', array('user' => Auth::user()) );
    }
    public function update_avatar(Request $request){

    	// Handle the user upload of avatar
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}

    	return view('profile', array('user' => Auth::user()) );




    }

    public function test(){
    	return view('test', array('user' => Auth::user()) );
    }
}
