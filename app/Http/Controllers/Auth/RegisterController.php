<?php

namespace App\Http\Controllers\Auth;
use App\Notifications\NewUser;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Image;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */



    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'phonenumber' => ['required', 'string','min:10', 'max:10'],
            'userid' => ['required', 'string','min:13', 'max:13'],
            //'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => ['required', 'string', 'max:255'],


            ]);


    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phonenumber' => $data['phonenumber'],
            'userid' => $data['userid'],
            'address' => $data['address'],
            //'parent_id' => $data['parent_id'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),

        ]);

        //DD($data);
        //$admin = User::where('admin', 1)->first();


        return $user;
        return view(''/imageupload);
    }

    public function update_avatar(Request $request){


        $this->validate($request, [

            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

    ]);

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

    public function showRegistrationForm()
{
    $member = \Illuminate\Support\Facades\DB::table('users')->orderby ('id','desc')->take(1)->get();

    return view('auth.register', compact('member'));
}





}
