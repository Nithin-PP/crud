<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Repository\StudentRepository;

class StudentController extends Controller
{
    public function __construct(StudentRepository $StudentRepository){
 $this->StudentRepository = $StudentRepository;
    }
     public function insert(Request $request){
        $data = $request->all();
        $result = $this->StudentRepository->form($data);
     }
 
}
