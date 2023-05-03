<?php
session_start();
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Form</title>
  <!-- boostrap in link in css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- boostrap in link in js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <!-- boostrap in jquery link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container-fulid">
    <h3 class="text-center">Contact Details</h3>
    @if(Session::has('success')){
     <div class="alert alert-success">{{Session::get('success')}}</div>
    }
    @endif
    <form class="container my-5 p-4 rounded" style="width:400px;" id="contactForm" method="POST" action="{{  url('/Send')  }}" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="Username" class="form-label">Username</label>
        <div class="form-group">
          <input type="text" class="form-control" id="Username"name="Username">
          @error('Username')<span class="text-danger">{{$message}}</span>@enderror
    
        </div>

      </div>
      <div class="mb-3">
        <div class="form-group">
          <label for="Password" class="form-label">Password</label>
          <input type="Password" class="form-control" id="Password" name="Password">
          @error('Password')<span class='text-danger'>{{$message}}</span>@enderror
        </div>
      </div>
      <div class="mb-3">
        <div class="form-group">
          <label for="Email" class="form-label">Email</label>
          <input type="email" class="form-control" id="Email" name="Email" >
         @error('Email')<span class='text-danger'>{{$message}}</span>@enderror
        </div>
      </div>
      <div class="mb-3">
        <div class="form-group">
          <label for="Number" class="form-label">Number</label>
          <input type="Number" class="form-control" id="Number" name="Number" >
         @error('Number')<span class='text-danger'>{{$message}}</span>@enderror
        </div>
      </div>
      <div class="mb-3">
        <input class="form-control my-4" type="file" id="file"  name="file" multiple>
        @error('file')<span class='text-danger'>{{$message}}</span>@enderror
      </div>
      <div class="mb-3 d-grid">
      @if(Session::has('success'))
        <div class="alert alert-success text-center">{{Session::get('success')}}</div>
        @endif
        <input type="submit" class="btn btn-success" name="Submit" id="Submit" value="Submit">
      </div>
      @csrf
    </form>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src="../js/form_validator.min.js"></script>
  <script src="../js/form_submit.js"></script>
<!-- 
  foreach loop logic

$value='[
            {"product_name":"crackers","qty":3,"amount":100.50},
            {"product_name":"crackers 2","qty":4,"amount":100.40}
            ]';
         $type=json_decode($value);
        $sum=0;
                foreach($type as $val){
                    $qty=$val->qty;
                    $amount=$val->amount;
                    $calculate= $qty * $amount;
                    $sum+=$calculate;
                    var_dump($calculate);
                }
                var_dump($sum);
                exit; -->
</body>

</html>

