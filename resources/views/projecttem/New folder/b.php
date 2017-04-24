<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Roomtype_meeting;
use App\Booking_meeting;
use App\Customer;
class HomeController extends Controller {


	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('projecttem/RgMeetingRoom');
	}
	public function add(){
      
      	$user_id = Auth::user()->id;
      	
       $cus= Customer::where('user_id',$user_id )->first();
     
         return view('projecttem/RgMeetingRoom')->with('cus',$cus);
    }

    // public function check(){
    // 	if (Input::get('date')==a) {
    		
    // 	}
    // 	$book=Booking_meeting::where('book_id',$book_id )->first();

    // }

	public function seveRM(Request $data)
	{
	// 	$a= Input::get('date');
	// 	// $b= Input::get('date1')
	// 	// $c= Input::get('room');
	// 	// $d= Input::get('time');
	// $e=where('book_checkin',$a);
	// echo "$e;


		$room = new Roomtype_meeting; 

			if (Input::get('room') == 1) {

			$book = new Booking_meeting; 
	        $book->book_time = Input::get('time');
	    	$book->book_checkin = Input::get('date');
	    	$book->book_checkout = Input::get('date1');
	    	$book->id_roomtype = Input::get('room');
	    	$book->save();
			}

			if (Input::get('room') == 2) {

			$book = new Booking_meeting; 
	        $book->book_time = Input::get('time');
	    	$book->book_checkin = Input::get('date');
	    	$book->book_checkout = Input::get('date1');
	    	$book->id_roomtype = Input::get('room');
	    	$book->save();
			}

			if (Input::get('room') == 3) {

			$book = new Booking_meeting; 
	        $book->book_time = Input::get('time');
	    	$book->book_checkin = Input::get('date');
	    	$book->book_checkout = Input::get('date1');
	    	$book->id_roomtype = Input::get('room');
	    	$book->save();
			}
			if (Input::get('room') == 4) {

			$book = new Booking_meeting; 
	        $book->book_time = Input::get('time');
	    	$book->book_checkin = Input::get('date');
	    	$book->book_checkout = Input::get('date1');
	    	$book->id_roomtype = Input::get('room');
	    	$book->save();
			}

			if (Input::get('room') == 5) {

			$book = new Booking_meeting; 
	        $book->book_time = Input::get('time');
	    	$book->book_checkin = Input::get('date');
	    	$book->book_checkout = Input::get('date1');
	    	$book->id_roomtype = Input::get('room');
	    	$book->save();
			}

			if (Input::get('room') == 6) {

			$book = new Booking_meeting; 
	        $book->book_time = Input::get('time');
	    	$book->book_checkin = Input::get('date');
	    	$book->book_checkout = Input::get('date1');
	    	$book->id_roomtype = Input::get('room');
	    	$book->save();
			}



			$cus = new Customer; 
	        $cus->cus_name = Input::get('name');
	    	$cus->cus_surname = Input::get('surname');
	    	$cus->cus_phonenumber = Input::get('phonenumber');
	    	$cus->cus_email = Input::get('email');
	    	$cus->cus_address = Input::get('address');
	    	$cus->cus_state = Input::get('state');
	    	$cus->cus_city = Input::get('city');
	    	$cus->cus_country = Input::get('country');
	    	$cus->cus_postalcode = Input::get('postalcode');
	    	$cus->book_id = $book->id;
	    	$cus->user_id = Auth::user()->id;

	    	$cus->save();
		
	       
	    
		// $room->roomtype_name = Input::get('room'); 


   //      $room->save();

 		// $book = new Booking_meeting; 

   //      $book->book_time = Input::get('time');
   //  	$book->book_checkin = Input::get('date');
   //  	$book->book_checkout = Input::get('date');
   //  	$book->save();

	

       

        // $room->phone_number = input::get('phone_number');  
        // $equipment->num_room = input::get('num_room');
        // // $date = date("Y-m-d"); 
        // $equipment->date_in = date("Y-m-d");   
        // $equipment->date_repair = input::get('date_repair');    
        // $equipment->time_repair = input::get('time_repair');    
        // $equipment->live = input::get('live');
        // $equipment->note = input::get('note');


		return Redirect::to('show');
	}


      // public function show(){
      
      // 	$user_id = Auth::user()->id;
      	
      //  $cus= Customer::where('user_id',$user_id )->first();
      //  $a = $cus->book_id;
      //  $book= Booking_meeting::where('id',$a )->first();
      //  $b = $book->id_roomtype;
       
      //  $room = Roomtype_meeting::where('id',$b )->first();
       
      //    return view('projecttem.ShowRM')->with('cus',$cus)->with('book',$book)->with('room',$room);
    	
    // }

//    public function edit($id) {
// 	$cus = Customer::find($id);		 
// 	return view('cus.edit')->with('cus',$cus);
// }

    public function update()
    {
    	$room = new Roomtype_meeting; 

			if (Input::get('room') == 1) {

			$book = new Booking_meeting; 
	        $book->book_time = Input::get('time');
	    	$book->book_checkin = Input::get('date');
	    	$book->book_checkout = Input::get('date1');
	    	$book->id_roomtype = Input::get('room');
	    	$book->save();
			}

			if (Input::get('room') == 2) {

			$book = new Booking_meeting; 
	        $book->book_time = Input::get('time');
	    	$book->book_checkin = Input::get('date');
	    	$book->book_checkout = Input::get('date1');
	    	$book->id_roomtype = Input::get('room');
	    	$book->save();
			}

			if (Input::get('room') == 3) {

			$book = new Booking_meeting; 
	        $book->book_time = Input::get('time');
	    	$book->book_checkin = Input::get('date');
	    	$book->book_checkout = Input::get('date1');
	    	$book->id_roomtype = Input::get('room');
	    	$book->save();
			}
			if (Input::get('room') == 4) {

			$book = new Booking_meeting; 
	        $book->book_time = Input::get('time');
	    	$book->book_checkin = Input::get('date');
	    	$book->book_checkout = Input::get('date1');
	    	$book->id_roomtype = Input::get('room');
	    	$book->save();
			}

			if (Input::get('room') == 5) {

			$book = new Booking_meeting; 
	        $book->book_time = Input::get('time');
	    	$book->book_checkin = Input::get('date');
	    	$book->book_checkout = Input::get('date1');
	    	$book->id_roomtype = Input::get('room');
	    	$book->save();
			}

			if (Input::get('room') == 6) {

			$book = new Booking_meeting; 
	        $book->book_time = Input::get('time');
	    	$book->book_checkin = Input::get('date');
	    	$book->book_checkout = Input::get('date1');
	    	$book->id_roomtype = Input::get('room');
	    	$book->save();
			}

       	$user_id = Auth::user()->id;
       	$cus= Customer::where('user_id',$user_id )->first();
       	$cus->cus_name = Input::get('name');
	    $cus->cus_surname = Input::get('surname');
	    $cus->cus_phonenumber = Input::get('phonenumber');
	    $cus->cus_email = Input::get('email');
	    $cus->cus_address = Input::get('address');
	    $cus->cus_state = Input::get('state');
	    $cus->cus_city = Input::get('city');
	    $cus->cus_country = Input::get('country');
	    $cus->cus_postalcode = Input::get('postalcode');
	    $cus->book_id = $book->id;
	    	$cus->user_id = Auth::user()->id;
	    

	    $cus->save();

       

     return Redirect::to('show');
      
    }
   
}
