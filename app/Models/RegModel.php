<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class RegModel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='register';
    protected $fillable=['name','email','password','number','dob','gender','course','qualification','address','image'];
}
