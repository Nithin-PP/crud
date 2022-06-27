<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()
    {
        // $result = Role::with('customerData')->get();
        // return $result;
        $flights = Role::where('role', 'editor')->first();
  
        $freshFlight = $flights->fresh();
        return $freshFlight;
        

    }


}
