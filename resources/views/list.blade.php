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
            <th>company</th>
            <th>experience</th>
        </tr>
        @foreach($data as $data1)
        <tr>
            <td>{{$count}}</td>
            <td>{{$data1->name}}</td>
            <td>{{$data1->companyData['course']}}</td>
            <td>{{$data1->companyData['experience']}}</td>
        </tr>
        <?php $count++; ?>
        @endforeach
    </table>
    </div>
</body>
</html>