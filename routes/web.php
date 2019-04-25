<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mregister', function () {
    return view('mregister');
});
Route::get('/test', function () {
    return view('test');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');
Route::get('/line', 'UserController@index2');
Route::get('/userinfo', 'UserController@index1');
Route::get('/test', 'memberController@k');
//Route::get('register', 'memberController@k');




Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/mregister', 'MregisterController@index');
Route::get('/mregister', 'MregisterController@insert');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
Route::post('auth.register', 'Auth\RegisterController@showRegistrationForm');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::middleware(['auth'])->group(function () {
    Route::get('/approval', 'HomeController@approval')->name('approval');

    Route::middleware(['approved'])->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
    });

    Route::middleware(['admin'])->group(function () {
        Route::get('/users', 'UserController@index')->name('admin.users.index');
        Route::get('/users/{user_id}/approve', 'UserController@approve')->name('admin.users.approve');
    });
});


Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');

Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');
Route::get('image-upload3', 'ImageUpload2Controller@imageUpload3')->name('image.upload3');
Route::post('image-upload3', 'ImageUpload2Controller@imageUploadPost3')->name('image.upload.post3');

Route::get('/imageupload', function () {
    return view('imageupload');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('imageupload/show', function () {
    return view('imageupload.show');
});
Route::get('imageupload/upload', function () {
    return view('imageupload/upload');
});


Route::resource('allmember', 'memberController');
Route::get('allmember/test','memberController@test');

Route::resource('imageupload', 'imageUploadController');
Route::get('imageupload/upload', 'imageUploadController@upload2');
Route::get('imageupload/show', 'imageUploadController@show');
Route::get('imageupload/index1', 'imageUploadController@index1');


Route::resource('imageupload2', 'imageupload2Controller');
/*
Route::get('form','FormController@create');
Route::post('form','FormController@store');
Route::post('form','FormController@insert');
Route::get('/test', 'UserController@test');
*/

Route::get('text-on-image','ImageUploadController@textOnImage')->name('textOnImage');

Route::get('/image', function()
{
    $img = Image::make('uploads/images/download.jpg')->resize(300, 400);
    $watermark = Image::make('uploads/images/cat.png')->resize(200,250);

        $img->text(auth::user()->name, 50, 150,);
        $img->text(auth::user()->id, 50, 200,);
        $img->text('Hello coderMen', 50, 100, function($font) {


            $font->align('center');
            $font->valign('bottom');
            $font->angle(0);
        });

    $img->insert($watermark, 'center');
    $img->save('uploads/card/card.jpg');
    return $img->response('jpg');
});
