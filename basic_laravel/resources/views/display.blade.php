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

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        {{-- @foreach($emprecords as $emp) --}}
            
       
        <tr>
            <td> <h1>{{$emprecords }}</h1></td>
            {{-- <td> <h1>{{$emp}}</h1></td>
            <td> <h1>{{$emp}}</h1></td>
            <td> <h1>{{$emp}}</h1></td> --}}
        </tr>
        {{-- @endforeach --}}
        </table>

    

        {{-- @foreach($emprecords as $emprecord)

        <h1>{{emprecord}}</h1>
            
        @endforeach --}}
       

   

    @endsection


    
</body>
</html>

  
    
