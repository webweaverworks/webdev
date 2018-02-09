<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
//	protected $fillable = ['title','body'];//allowed
//	protected $guarded = ['user'] ;//not allowed
	protected $guarded = [];//not guarding anything
   }
