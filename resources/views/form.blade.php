<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div class="container well" style="margin-top: 50px;">
<h1>registration form</h1>

        <form id="form" action="{{url('reg')}}" name="form" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-6">
                Name :
                <input type="text" class="form-control" name="name" id="name" placeholder="enter name">
            </div>

            <div class="form-group col-md-6">
                Username :
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
            </div>
            <div>
            <input type="submit" class="btn btn-success" name="submit" id="submit">
            </div>
            </div>
        </form>
    </div> 
</body>