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


    <form action="/reg" method="POST" style="height: 660px">
        @csrf
        <div class="row mt-5" >
        <div class="mb-3 col-md-4">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="text" class="form-control" name="username" >
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          @error('username')
         <div class="alert alert-danger">{{ $message }}</div>
       @enderror
        </div>
        <div class="mb-3 col-md-4">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="userpwd" class="form-control" id="exampleInputPassword1">
          @error('userpwd')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
       
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" name="submitbtn" value="register" class="btn btn-primary col-md-2">Submit</button>
    </div>
      </form>

      @endsection
    
</body>
</html>