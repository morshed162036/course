<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class Customer extends Model
{
    use HasFactory;
    use Softdeletes;

    protected $table = "customers";
    protected $primaryKey = "customer_id";

    public function setNameAttribute($value){
        $this->attributes['name'] = ucwords($value);
    }
    // public function setUserNameAttribute($value){
    //     $this->attribute['user_name'] = ucwords($value);// if column name has _ this symbol then this function name used as same.
    // }

    // public function getDobAttribute($value){
    //     return date("d-M-Y",strtotime($value));
    // }
}
