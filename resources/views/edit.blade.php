<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container well" style="margin-top: 50px;">
<h1>registration form</h1>
<!-- @if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif -->
        <form id="form" action="{{url('update')}}" name="form" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="hidden" id="hidden" value="{{$edited->id}}">
            <div class="form-group col-md-6">
                Name:
                <input type="text" class="form-control" value="{{$edited->name}}" name="name" id="name" placeholder="enter name">
            </div>

            <div class="form-group col-md-6">
                Username:
                <input type="email" class="form-control" value="{{$edited->email}}" name="email" id="email" placeholder="name@example.com">
            </div>

            <div class="form-group col-md-6" >
                Password:   
                <input type="password" class="form-control" value="{{$edited->password}}" name="password" id="password">
            </div>

            <div class="form-group col-md-6">
                 Phone number:
                <input type="number" class="form-control" value="{{$edited->number}}" name="number" id="number">
            </div>

            <div class="form-group col-md-6">
                Your birthday:
                <input type="date" class="form-control color" value="{{$edited->dob}}" name="date" id="date">
            </div>

            <div class="form-group col-md-12 gender">
                Gender:
                <div class="form-group col-md-6"><input type="radio" name="gender" id="gender1" value="male" @if($edited->gender=='male'){{"checked"}}@endif>male</div>
               
                <div class="form-group col-md-6"><input type="radio" name="gender" id="gender2" value="female" @if($edited->gender=='female'){{"checked"}}@endif>female</div>
                <div class="form-group col-md-6"><input type="radio" name="gender" id="gender3" value="other" @if($edited->gender=='other'){{"checked"}}@endif>other</div>
            </div>

            <div class="row">
            <div class="form-group col-md-12">
                <?php 
                $coursees=explode(',',$edited->course);
                ?>
            <label for="course" class="form-group col-12">Course:</label>
            <input type="checkbox" id="cou" name="course[]" class="form-group col-md-1" value="html" @if(in_array('html',$coursees)){{"checked"}}@endif>html
            <input type="checkbox" id="cou" name="course[]" class="form-group col-md-1" value="php"  @if(in_array('php',$coursees)){{"checked"}}@endif>php
            <input type="checkbox" id="cou" name="course[]" class="form-group col-md-1" value="java"  @if(in_array('java',$coursees)){{"checked"}}@endif>java
            </div>
            </div>

            <div class="form-group col-md-6" >
            Qualification:
                <select name="qualification" id="qualification" class="form-control color">
                    <option value="">select</option>
                    <option value="Btech" @if($edited->qualification=='Btech'){{"selected"}}@endif> Btech</option>
                    <option value="Bcom"  @if($edited->qualification=='Bcom'){{"selected"}}@endif> Bcom</option>
                    <option value="Bsc" @if($edited->qualification=='Bsc'){{"selected"}}@endif>Bsc</option>
                </select>
            </div>

            <div class="form-group col-md-6" >
            Address:
                <textarea id="add" class="form-control" name="add" style="height: 100px;">{{$edited->address}}</textarea>
            </div>

            <div class="form-group col-md-6" >
                image:              
                 <input type="file" class="form-control color" name="file" id="file"> 
                 <img src="{{asset('uploads/'.$edited->image)}}" alt="" width="80px" height="80px">         
            </div>
            <div>
            <input type="submit" class="btn btn-success" name="submit" id="submit">
            </div>
        </form>
    </div>   
</body> 
</html>