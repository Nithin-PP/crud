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
    <br>
    <h1 style="text-align:center;">Members List</h1>
    <div class="container-fluid">
    <table class="table">
        <?php 
        $count=1;
        ?>
        @if (session()->has('success'))
        <div class="alert alert-danger col-md-12"><p style="text-align:center;">{{ session('success') }}</p></div>
        @endif
        <div >
        <a href="new" class="btn btn-primary">add+</a>
        </div>
<br> 
<br>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>number</th>
            <th>dob</th>
            <th>gender</th>
            <th>courses</th>
            <th>qualification</th>
            <th>address</th>
            <th>image view</th>
            <th colspan="2">operation</th>
        </tr>
        @foreach($members as $member)
        <tr>
            <td>{{$count}}</td>
            <td>{{$member->name}}</td>
            <td>{{$member->email}}</td>
            <td>{{$member->password}}</td>
            <td>{{$member->number}}</td>
            <td>{{$member->dob}}</td>
            <td>{{$member->gender}}</td>
            <td>{{$member->course}}</td>
            <td>{{$member->qualification}}</td>
            <td>{{$member->address}}</td>
            <td><img src="{{asset('uploads/'.$member->image) }}" alt="" width="80px" height="80px"></td>
            <td> <a href="{{'edit/'.$member->id}}" class="btn btn-primary">edit</a> 
                 <a href="{{'delete/'.$member->id}}" class="btn btn-danger">delete</a></td>
        </tr>
        <?php $count++; ?>
        @endforeach
    </table>
    </div>
</body>
</html>