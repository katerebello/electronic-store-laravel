<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adminprofile extends Model
{

    protected $fillable = ['name','email','company_name','phone_no'];

    public function user()
    { 
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        return $this->hasMany(Product::class)->orderBy('created_at', 'DESC');
    }
}
