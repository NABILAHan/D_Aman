<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Roomtype;
use App\Booking_room;
use App\Roomtype_meeting;
use App\Booking_meeting;
use App\Oderbooking_meetimg;
use App\Customer;
use App\News;
use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
use FlashMessages;
use Carbon\Carbon;
use DB;
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

	public function index()
	{ 							
		return view('projecttem/RgMeetingRoom');
	}
	 
	public function seveRM($id)
	{


		$book=Booking_meeting::all();
		$bookRoom=new Booking_room;	
		
		$inputCheckinDate=Input::get('date');
		$inputCheckoutDate=Input::get('date1');
	
		
		$checkinDateNew = Booking_meeting::where('book_checkin','>=',$inputCheckinDate)->orderBy('book_checkin', 'desc')->first();

	
		$checkoutDateOrl = Booking_meeting::where('book_checkout','>=',$inputCheckoutDate)->orderBy('book_checkout', 'desc')->first();

	  	
		 	
	 	
	  if( $inputCheckinDate >  $checkoutDateOrl){
	   	$existCustomer=Customer::where('user_id',$id)->first();
	   	$room = new Roomtype_meeting; 

			$book = new Booking_meeting; 
	        $book->time = Input::get('time');
	    	$book->book_checkin = Input::get('date');
	    	$book->book_checkout = Input::get('date1');
	    	$book->id_detailmeeting = Input::get('room');
	    	$book->save();	
	
		if ($existCustomer!==null) { 
	//old uesr
			
			$user_id = Auth::user()->id;
	       	$cus= Customer::where('user_id',$user_id )->first();
	       	$cus->cus_name = Input::get('name');
		    $cus->cus_surname = Input::get('surname');
		    $cus->cus_phonenumber = Input::get('phonenumber');
		    $cus->cus_idcard= Input::get('idcard');
		    $cus->cus_email = Input::get('email');
		    $cus->cus_address = Input::get('address');
		    $cus->cus_state = Input::get('state');
		    $cus->cus_city = Input::get('city');
		    $cus->cus_country = Input::get('country');
		    $cus->cus_postalcode = Input::get('postalcode');
		    $cus->book_meeting_id = $book->id;
		  
		    $cus->user_id = Auth::user()->id;
		    $cus->save();	   

		}
		else{ //newuesr
			
			$cus = new Customer; 
	        $cus->cus_name = Input::get('name');
	    	$cus->cus_surname = Input::get('surname');
	    	$cus->cus_phonenumber = Input::get('phonenumber');
	    	$cus->cus_idcard= Input::get('idcard');
	    	$cus->cus_email = Input::get('email');
	    	$cus->cus_address = Input::get('address');
	    	$cus->cus_state = Input::get('state');
	    	$cus->cus_city = Input::get('city');
	    	$cus->cus_country = Input::get('country');
	    	$cus->cus_postalcode = Input::get('postalcode');
	    	$cus->book_meeting_id = $book->id;
	    	$cus->user_id = Auth::user()->id;
	    	$cus->save();

			}
			return Redirect::to('show');	
				 
		}
		elseif ($inputCheckoutDate <  $checkinDateNew){
		 	 			
	 	 echo "<script type='text/javascript'>".
      "alert('Success to add the task to a project.');
       location.reload;".
     "</script>";
      exit();

    
	}
 return Redirect::to('RM');
			 
}
    		 public function tablebook($id)
    		{
    	
      			 $c = Customer::all();
       			$book= Booking_meeting::where('id',$id )->first();
       			$b = $book->id_detailmeeting;
       			$room = Roomtype_meeting::where('id',$b )->first();

        		return view('staff/payments')->with('c',$c)->with('book',$book)->with('room',$room);
   			 }
   			 public function Odermeeting($id)
    		{
    			$odermeeting =new Oderbooking_meetimg;

    			$bookRoom=Booking_meeting::all();
    			$book= Booking_meeting::where('id',$id )->first();
    			$cus = Customer::where('id',$id )->first();
    			$odermeeting->id_customer = $cus->id;
    			$odermeeting->id_meeting = $book->id;
    			$odermeeting->booking_code = $cus->cus_idcard;
    			$odermeeting->name_room_meeting = $book->id_detailmeeting;
    			$odermeeting->book_checkin = $book->book_checkin;
    			$odermeeting->book_checkout =$book->book_checkout;
    			$odermeeting->status ="อนุมัติ";
    			$odermeeting->save();
    			return Redirect::to('app');

   			 }
   			 	public function Oder()
	{ 

	 $oder = Oderbooking_meetimg::orderBy('id','DESC')->get();
 	 return  view('staff/approved')->with('oder',$oder);						
		
	}


		public function Comment(){
		$comment = new Comment;
		$comment->name = Input::get('name');
		$comment->body = Input::get('comment');
		$comment->save();
		return Redirect::to('show');
	}
   			
}    
      
   





		

