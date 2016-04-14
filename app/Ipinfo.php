<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ipinfo extends Model
{
    
         protected $fillable = [

		'user_id',
		'ip_add',
		'mac_add',
		'tag_no',
		'asignee',
		'status',
		'department',
		'remarks'


	];
}
