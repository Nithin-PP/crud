<?php

namespace App\Http\Controllers;

use App\Models\RegModel;
use Illuminate\Http\Request;

class RegController extends Controller
{

    public function index()
    {
        return view('register');
    }


    public function create(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|unique:register',
            'password' => 'required',   
            'number' =>'required',
            'date' => 'required',
            'gender'=>'required',
            'course' => 'required',
            'qualification' =>'required',
            'add' => 'required',
            'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

   $regmodel= new RegModel();

   $regmodel->name = $request->name;
   $regmodel->email = $request->email;
   $regmodel->password = $request->password;
   $regmodel->number = $request->number;
   $regmodel->dob = $request->date;
   $regmodel->gender = $request->gender;
   $regmodel->course =implode(",",$request->course);
   $regmodel->qualification = $request->qualification;
   $regmodel->address = $request->add;

   $file = $request->file('file');
       $extention = $file->getClientOriginalName();
       $filename =  $request->name.'.'.$extention;
       $file->move('uploads/',$filename);
       $regmodel->image = $filename;
   $regmodel->save();
   return redirect('add')->with('status','uploaded successfully');
    }


    public function store(Request $request)
    {
        //
    }


    public function show()
    {
        $data = RegModel::all();
        return view('data',['members'=>$data]);
    }


    public function edit($id)
    {
        $edit=Regmodel::find($id);
        return view('edit',['edited'=>$edit]);
    }


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
    $update->update();
    return redirect('list');

    }


    public function delete($id)
    {
    $delete = Regmodel::find($id);
        $delete->delete();
        return redirect('list')->with('success', 'Data Deleted Succesfully !!');
    }
}
