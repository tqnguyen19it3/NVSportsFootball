<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginModels extends Model
{
    // use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'user_email', 'user_name','user_password','user_phone','user_gender','user_city','user_age','user_avatar','user_clb_vt'
    ];
    protected $primaryKey = 'user_id';
 	protected $table = 'tbl_user';
}
