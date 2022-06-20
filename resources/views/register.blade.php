<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../css/jpreview.css"> -->
	<!-- <script src="../js/jpreview.js"></script> -->
</head>
<body>
<div class="container well" style="margin-top: 50px;">
<h1>registration form</h1>

<!-- @if($errors->any())
    {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
@endif -->

        <form id="form" action="{{url('register')}}" name="form" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-6">
                Name :
                <input type="text" class="form-control" name="name" id="name" placeholder="enter name">
                <span style="color:red;">@error('name'){{$message}}@enderror</span>
            </div>

            <div class="form-group col-md-6">
                Username :
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                <span style="color:red;">@error('email'){{$message}}@enderror</span>
            </div>

            <div class="form-group col-md-6" >
                Password :
                <input type="password" class="form-control" name="password" id="password">
                <span style="color:red;">@error('password'){{$message}}@enderror</span>
            </div>

            <div class="form-group col-md-6">
                 Phone number :
                <input type="number" class="form-control" name="number" id="number">
                <span style="color:red;">@error('number'){{$message}}@enderror</span>
            </div>

            <div class="form-group col-md-6">
                Your birthday :
                <input type="date" class="form-control color" name="date" id="date" max="{{date('Y-m-d')}}">
                <span style="color:red;">@error('date'){{$message}}@enderror</span>
            </div>

            <div class="form-group col-md-12 gender">
                Gender :
                <div class="form-group col-md-6"><input type="radio" name="gender" id="gender1" value="male">male</div>
                <div class="form-group col-md-6"><input type="radio" name="gender" id="gender2" value="female">female</div>
                <div class="form-group col-md-6"><input type="radio" name="gender" id="gender3" value="other">other</div>
                <span style="color:red;">@error('gender'){{$message}}@enderror</span>
            </div>

            <div class="row">
            <div class="form-group col-md-12">
            <label for="course" class="form-group col-12">Course : </label>
            <input type="checkbox" id="cou" name="course[]" class="form-group col-md-1" value="html">html
            <br>
            <input type="checkbox" id="cou" name="course[]" class="form-group col-md-1" value="php">php
            <br>
            <input type="checkbox" id="cou" name="course[]" class="form-group col-md-1" value="java">java
            <br><div class="form-group col-md-4">
            <span style="color:red;">@error('course'){{$message}}@enderror</span>
            </div>
            </div>
            </div>

            <div class="form-group col-md-6" >
            Qualification :
                <select name="qualification" id="qualification" class="form-control color">
                    <option value="">select</option>
                    <option value="Btech">Btech</option>
                    <option value="Bcom">Bcom</option>
                    <option value="Bsc">Bsc</option>
                </select>
                <span style="color:red;">@error('qualification'){{$message}}@enderror</span>
            </div>

            <div class="form-group col-md-6" >
            Address :
                <textarea id="add" class="form-control" name="add" style="height: 100px;"></textarea>
                <span style="color:red;">@error('add'){{$message}}@enderror</span>
            </div>

            <div class="form-group col-md-6" >
                image :              
                 <input type="file" class="form-control" name="file" id="file" > 
                 <span style="color:red;">@error('file'){{$message}}@enderror</span>      
            </div>
            <!-- <div id="preview-container" class="jpreview-container"></div>   -->

            <div>
            <input type="submit" class="btn btn-success" name="submit" id="submit">
            </div>
        </form>
    </div> 
    <script>
  function loadPreview(input, id) {
    id = id || '#preview_img';
    if (input.files && input.files[0]) {
        var reader = new FileReader();
 
        reader.onload = function (e) {
            $(id)
                    .attr('src', e.target.result)
                    .width(200)
                    .height(150);
        };
 
        reader.readAsDataURL(input.files[0]);
    }
 }
</script>  
</body> 
</html>