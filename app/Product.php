<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function adminprofile()
    {
        return $this->belongsTo(Adminprofile::class);
    }

    public function image()
    {
        return $this->hasMany(Image::class);
    }

    public function color()
    {
        return $this->hasMany(Color::class);
    }
}

