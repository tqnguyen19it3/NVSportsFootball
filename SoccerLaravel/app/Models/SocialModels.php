<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialModels extends Model
{
    // use HasFactory;
    public $timestamps = false;
    protected $fillable = [
          'provider_customer_id',  'provider',  'customer'
    ];
 
    protected $primaryKey = 'customer_id';
 	protected $table = 'tbl_social';
 	
 	public function login_user(){
 		return $this->belongsTo('App\Models\LoginModels', 'customer');
 	}
}
