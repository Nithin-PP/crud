<?php

namespace App\Http\Controllers;

use App\Models\RegModel;
use Illuminate\Http\Request;

class RegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|unique:register',
            'password'=>'required',
        ]);

   $regmodel= new RegModel();

   $regmodel->name = $request->name;
   $regmodel->email = $request->email;
   $regmodel->password = $request->password;
   $regmodel->number = $request->number;
   $regmodel->dob = $request->date;
   $regmodel->gender = $request->gender;
   $regmodel->course = $request->course;
   $regmodel->qualification = $request->qualification;
   $regmodel->address = $request->add;

   $file = $request->file('file');
       $extention = $file->getClientOriginalName();
       $filename =  $request->name.'.'.$extention;
       $file->move('uploads/',$filename);
       $regmodel->image = $filename;
   $regmodel->save();
   return redirect('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegModel  $regModel
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = RegModel::all();
        return view('data',['members'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegModel  $regModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=Regmodel::find($id);
        return view('edit',['edited'=>$edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegModel  $regModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $update = RegModel::find($req->hidden);
        $update->email = $req->email;
        $update->password = $req->password;
        $update->number = $req->number;
        $update->dob = $req->date;
        $update->gender = $req->gender;
        $update->course = $req->course;
        $update->qualification = $req->qualification;
        $update->address = $req->add;
if($req->hasFile('file')){
        $file = $req->file('file');
        $extention = $file->getClientOriginalName();
        $filename =  time().'.'.$extention;
        $file->move('uploads/',$filename);
        $update->image = $filename;
}
    $update->save();
    return redirect('list');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegModel  $regModel
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
    $delete = Regmodel::find($id);
        $delete->delete();
        return redirect('list');
    }
}
