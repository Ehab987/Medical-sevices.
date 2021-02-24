<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    protected $fillable = ['id','name','email','mobile','notes','sevice_id','city_id','created_at','updated_at'];
    protected $hidden = ['updated_at'];
    //public $timestamps = true;

    public function getCityIdAttribute($value){

        if($value == 1){
            return $value = 'Riyadh';
        }elseif($value == 2){
            return $value = 'Jeddah';
        }elseif($value == 3){
            return $value = 'Mecca';
        }else{
            return 'Madina';
        }
        
    }
    public function getSeviceIdAttribute($value){

        if($value == 1){

            return $value = 'Treatment';

        }elseif($value == 2){
            return $value = 'Medical Care';
        }else{
            return $value = 'Lap';
        }
    }

}
