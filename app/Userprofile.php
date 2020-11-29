<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userprofile extends Model
{
    protected $fillable = ['username','email','phone_no'];
    
    public function user()
    { 
        return $this->belongsTo(User::class);
    }
   
}
