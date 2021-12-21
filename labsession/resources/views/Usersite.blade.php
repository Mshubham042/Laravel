<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Site</title>
</head>
<body class="container">

       <div class="user mt-5">

        <h1 class="text-center">Welcome to user page</h1>

        <div class="row col-md-12">
          
            @foreach($pools as $pool)
               <div class="col-md-10"><h2>{{$pool->Question}}</h2></div>
               <div class="row col-md-12 mt-1">
                <p class="col-md-4">{{$pool->opt1}}</p>
                <input class="col-md-2" type="radio" name="ans"/>
              </div> 
               <div class="row col-md-2">{{$pool->opt2}}</div>
               <div class="row col-md-2">{{$pool->opt3}}</div>
               <div class="row col-md-2">{{$pool->opt4}}</div>
            @endforeach
        </div>

       </div>
    
</body>
</html>