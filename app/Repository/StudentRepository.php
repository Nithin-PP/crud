<?php 
namespace App\Repository;
use App\Models\Student;
  
class StudentRepository{

    public function form($data){
         $student = new Student;
         $student->name = $data['name'];
         $student->email = $data['email'];
         $student->save();
    }
}

?>