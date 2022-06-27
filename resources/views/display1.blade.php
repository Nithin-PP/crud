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
        <tr>
            <th>id</th>
            <th>name</th>
            <th>roles</th>
        </tr>
        @foreach($result as $result1)

        @php
        $res=$result1->roleData;
        @endphp
        <tr>
            <td>{{$count}}</td>
            <td>{{$result1->name}}</td>      
            <td> @foreach($res as $res1)
                {{$res1->role}},
                @endforeach</td>      
        </tr>
        <?php $count++; ?>
        @endforeach
    </table>
    </div>
</body>
</html>