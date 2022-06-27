<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table='roles';
    protected $primaryKey = 'id';

    // function customerData(){
    //     return $this->belongsToMany(Customer::class, 'rolecustomers', 'customers_id', 'roles_id');
    // }

}
