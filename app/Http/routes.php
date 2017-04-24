<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::controllers([
    'auth' => 'Auth\AuthController',

    'password' => 'Auth\PasswordController',
]);
Route::controllers([
    'staff' => 'StaffController',

]);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::resource('staff', 'StaffController');
Route::get('staff', 'StaffController@index');







Route::get('/', function () {
    return view('index');
  });  
Route::get('change/{locale}', function ($locale) {
	Session::set('locale', $locale); // กำหนดค่าตัวแปรแบบ locale session ให้มีค่าเท่ากับตัวแปรที่ส่งเข้ามา 
	return Redirect::back(); // สั่งให้โหลดหน้าเดิม
});
Route::get('home', function () {
    return view('projecttem/home');
});

Route::get('rg', function () {
    return view('staff/reservation');
});

// Route::get('payments', function () {
//     return view('staff/payments');
// });

Route::get('home1', function () {
    return view('projecttem/homemember');
});

Route::get('mr', function () {
    return view('projecttem/meetingRoom');
});

Route::get('room', function () {
    return view('projecttem/Room');
});
Route::get('restaurant', function () {
    return view('projecttem/Restaurant');
});
Route::get('roo_l', function () {
    return view('projecttem/Large_M');
});

Route::get('registerroom', function () {
    return view('projecttem/rReservationRoom');
});
Route::get('contact', function(){
    return view('projecttem/contact');
});



Route::get('/a', 'StaffController@apprize');
Route::post('newAction','StaffController@News');
// Route::get('/test', 'StaffController@test');

Route::post('contact','HomeController@Comment');


Route::get('/RM', 'HomeController@index');

Route::get('/app', 'HomeController@Oder');
Route::post('/RM/{id}', 'HomeController@seveRM');

Route::get('/showOdermeeting', 'HomeController@showOdermeeting');


// Route::post('RM/{id}', 'HomeController@update');


Route::get('payments/{id}', 'HomeController@tablebook');
Route::post('payments/{id}', 'HomeController@Odermeeting');




// Route::group(['middleware' => 'web'], function () {
// Route::auth();

//  Route::post('/RM/update/{id}', 'HomeController@update');

use App\Customer;    
use App\Roomtype_meeting;
use App\Booking_meeting;
Route::get('show',function(){

    $user_id = Auth::user()->id;

    $cus = Customer::where('user_id',$user_id)->first();
    $a = $cus->book_meeting_id;
       $book= Booking_meeting::where('id',$a )->first();
       $b = $book->id_detailmeeting;
       
       $room = Roomtype_meeting::where('id',$b )->first();
       
         return view('projecttem/show')->with('cus',$cus)->with('book',$book)->with('room',$room);
});



// });
