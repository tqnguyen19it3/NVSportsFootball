<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YardSystemModels extends Model
{
    // use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'admin_id','quan_id', 'yard_system_name','yard_system_slug','yard_system_desc','yard_system_img','yard_system_address','yard_system_maps'
    ];
    protected $primaryKey = 'yard_system_id';
 	protected $table = 'tbl_yard_system';
}
