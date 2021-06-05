<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YardModels extends Model
{
    // use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'yard_system_id', 'quan_id', 'yard_slug','yard_status','yard_mss','yard_surface','yard_img','yard_limit','yard_utilities'
    ];
    protected $primaryKey = 'yard_id';
 	protected $table = 'tbl_yard';
}
