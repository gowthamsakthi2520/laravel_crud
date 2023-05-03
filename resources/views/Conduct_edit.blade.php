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
    <h3 class="text-center text-primary">Change the Content</h3>
    <form class="container my-5 p-4 rounded" style="width:400px;" id="contactForm" method="POST" action="{{route('update',$User->id)}}" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="Username" class="form-label">Username</label>
        <div class="form-group">
          <input type="text" class="form-control" id="Username"name="Username" value="{{$User->Username}}" aria-describedby="emailHelp">
          @error('Username')<span class="text-danger">{{$message}}</span>@enderror
        </div>

      </div>
      <div class="mb-3">
        <div class="form-group">
          <label for="Password" class="form-label">Password</label>
          <input type="text" class="form-control" id="Password" value="{{$User->Password}}" name="Password" required >
          @error('Password')<span class="text-danger">{{$message}}</span>@enderror
        </div>
      </div>
      <div class="mb-3">
        <div class="form-group">
          <label for="Email" class="form-label">Email</label>
          <input type="email" class="form-control" id="Email" value="{{$User->Email}}" name="Email" required >
         @error('Email')<span class="text-danger">{{$message}}</span>@enderror
        </div>
      </div>
      <div class="mb-3">
        <div class="form-group">
          <label for="Number" class="form-label">Number</label>
          <input type="Number" class="form-control" id="Number" value="{{$User->Number}}" name="Number" required >
         @error('Number')<span class="text-danger">{{$message}}</span>@enderror
        </div>
      </div>
      <!-- <div class="form-group mb-3">
        <input type='file' name='file' value='<img  src="{{url($User->name)}}" height="70" width="70">'>
        <label for="Number" class="form-label">{{$User->name}}</label>
      
      </div> -->

      <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Profile Pic</label>
            <div class="col-sm-9">
                <input type="file" class="form-control" name="file">
                <img src="{{ asset($User->name) }}" height="50" width="50" class="mt-2">
                <label class="form-label">{{$User->name}}</label>
            </div>
                           
        </div>
      <div class="mb-3 d-grid">
        <input type="submit" class="btn btn-success" name="Submit" id="Submit" value="Submit">
      </div>
      @csrf
    </form>
  </div>


</body>

</html>