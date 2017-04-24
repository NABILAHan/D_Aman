<?php namespace App\Http\Controllers;

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
use App\Oderbooking_meeting;
use App\News;
class StaffController extends Controller {




	public function __construct()
	{
		$this->middleware('staff');

	}


	public function index()
	{ 

	 $cus = Customer::orderBy('user_id','DESC')->get();
 	 return  view('projecttem/table')->with('cus',$cus);						
		
	}
	
	// public function tast()
	// { 

	//  $data = News::orderBy('id','DESC')->get();
 // 	 return  view('projecttem/home')->with('data',$data);						
		
	// }


	 public function apprize(){
        return view('staff.apprize');
    }

 public function News() {
        $comment = Input::get('comment');
        $new = new News;
        $new->news = $comment;
        $new->save();
        return redirect('home');
    }


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
