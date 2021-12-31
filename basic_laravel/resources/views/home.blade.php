<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Basic laravel</title>
</head>
<body class="container">


    
     @extends('template.layout')

     @section('content')

     <form method="post" action="/register"  class="row col-6 g-4 mt-4">
      @csrf
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="" >
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Username</label>
        <input type="email" name="username" class="form-control" id="inputPassword4">
      </div>
      <div class="col-6">
        <label for="inputAddress" class="form-label">Password</label>
        <input type="password" name="password" class="form-control"  placeholder="">
      </div>
      <div class="col-6">
      <label for="inputAddress" class="form-label">Gender</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="male">
        <label class="form-check-label" for="flexRadioDefault1">
        Male
        </label>
      </div>
      <div class="form-check">
       
        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="female" checked>
        <label class="form-check-label" for="flexRadioDefault2">
          Female
        </label>
      </div>
      </div>
      <div class="col-6">
        <label for="inputAddress" class="form-label">Stream</label>
        
        <select name="stream" class="form-control" >
          @php
            $arr  = array("BCA","MCA","MCOM","BBA","MBA");
          @endphp
  
          @foreach($arr as $value)
          <option class="form-control" value={{$value}}>{{$value}}</option>
          @endforeach
        
         
          
        </select>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>

      @endsection
    
</body>
</html>