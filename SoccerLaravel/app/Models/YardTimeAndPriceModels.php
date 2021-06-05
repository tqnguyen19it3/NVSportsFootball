<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YardTimeAndPriceModels extends Model
{
    // use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
     'yard_system_id','yard_id','time_price_hours','time_price_pay','time_price_status'
    ];
    protected $primaryKey = 'time_price_id';
 	protected $table = 'tbl_time_price';
}
