<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //if name is not as same as table in DB
    public $timestamps = false;
    protected $table = "offers";
    protected $fillable = ['offer_name_en', 'offer_name_ar', 'price', 'details_en', 'details_ar'];
    protected $hidden = ['created_at'];
}
