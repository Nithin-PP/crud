<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // public function index()
    // {
    //     $customer = new Customer();
    //     $customer->name="";
    //     $customer->email="";
    //     $customer->password="";
    //     $customer->save();
    // }
    public function create()
    {
    // $data = Customer::find(1)->companyData;
    $data=Customer::with('companyData')->get();  
    // return view('list',['data1'=> $data]);
    return view('list',compact('data'));

    }

    public function store()
    {
        $data1=Customer::with('courseData')->get();
        return view('display',compact('data1'));
    }

    public function show(Customer $customer)
    {
        //
    }

    public function edit(Customer $customer)
    {
        //
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
