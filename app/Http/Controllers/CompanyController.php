<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function index()
    {
        $company= new Company();
        $company->customers_id="4";
        $company->company="poco";
        $company->experience="1";
        $company->save();
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Company $company)
    {
        //
    }

    public function edit(Company $company)
    {
        //
    }


    public function update(Request $request, Company $company)
    {
        //
    }


    public function destroy(Company $company)
    {
        //
    }
}
