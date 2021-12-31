<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @extends('template.layout')

    @section('content')

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>View</th>
        </tr>

        @foreach($emprecords as $emp)
           
        <tr>
            <td> <p>{{$emp->id}}</p></td>
            <td> <p>{{$emp->Name}}</p></td>
            <td> <p>{{$emp->Username}}</p></td>
            <td> <p>{{$emp->Password}}</p></td>
            <td> <a class="btn btn-success" href="edit_page/{{$emp->id}}">Edit</a></td>
            <td> <a class="btn btn-danger" href="delete_user/{{$emp->id}}">Delete</a></td>
            <td> <a class="btn btn-info" href="edit_page/{{$emp->id}}">View</a></td>
        </tr>
        @endforeach
      
        </table>

        <div class="addbtn col-2">
            <a class="btn btn-info" href="/demo">Add User</a>
        </div>

    @endsection


    
</body>
</html>

  
    
