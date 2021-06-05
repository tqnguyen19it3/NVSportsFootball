<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostYardSysModels extends Model
{
    // use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'yard_system_id', 'post_yardsys_metakeyword', 'post_yardsys_content', 'post_yardsys_status',
    ];
    protected $primaryKey = 'post_yardsys_id';
 	protected $table = 'tbl_post_yardsys';
}
