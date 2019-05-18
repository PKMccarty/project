<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $fillable=['proj_type_id','proj_name','proj_amount','proj_price','proj_detail'];
}
