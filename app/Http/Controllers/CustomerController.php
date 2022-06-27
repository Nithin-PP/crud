<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function create()
    {
    // $data = Customer::find(1)->companyData;
    // return view('list',['data1'=> $data]);
    $data=Customer::with('companyData')->get();  
    return view('list',compact('data'));
    // return $data;

    }

    public function store()
    {
        $result=Customer::with('courseData')->get();
        return view('display',compact('result'));
    }

    public function show()
    {
        $result=Customer::with('roleData')->get();
        return view('display1',['result'=> $result]);
    }

}
