<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table='customers';

    function companyData(){
    return $this->hasOne(Company::class,'customers_id');
    }

    function courseData(){
    return $this->hasMany(Course::class,'customers_id');
    }

    
}
