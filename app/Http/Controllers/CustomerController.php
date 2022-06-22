<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Role;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function create()
    {
    // $data = Customer::find(1)->companyData;
    // return view('list',['data1'=> $data]);
    $data=Customer::with('companyData')->get();  
    return view('list',compact('data'));

    }

    public function store()
    {
        $result=Customer::with('courseData')->get();
        return view('display',compact('result'));
    }

    public function show()
    {
        $result=Customer::with('roleData')->get()->find(4);
         // return view('display1',['result'=> $result]);
    }

    public function edit(Customer $customer)
    {
        
    }

    public function update(Request $request, Customer $customer)
    {
        //
    }


    public function destroy(Customer $customer)
    {
        //
    }
}
