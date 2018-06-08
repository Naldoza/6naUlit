<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $guarded=[];
	protected $fillable = ['Subject' , 'RequestingParty' , 'area' ,'recommended','workDescription', 'materialsNeeded',];
}
