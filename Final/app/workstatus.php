<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class workstatus extends Model
{
    protected $guarded=[];
	protected $fillable = ['materials','WorkDue','completed','others','Select','worker',];
}
