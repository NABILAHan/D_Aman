<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {
	
	
 public function User(){
    	return $this->belongsTo(User::class);
    }
 public function Oderbooking_meetimg(){
        return $this->hasMany(Oderbooking_meetimg::class);
    }
}
