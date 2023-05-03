<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    
   <div class="container">
   <a href='{{url("Contact")}}' class="btn btn-primary">Add</a>
   <table class="table table-responsive table-striped table-hover text-center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">File</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($Users as $User)
    <tr>
      <td>{{$User->id}}</td>
      <td>{{$User->Username}}</td>
      <td>{{$User->Password}}</td>
      <td>{{$User->Email}}</td>
      <td>{{$User->Number}}</td>
      <td><img src="{{asset($User->name)}}" alt="" width="50" height="50"></td>
      <td><a href='{{url("Conduct_edit")."/".$User->id}}' class='btn btn-primary'>Edit</a></td>
      <td><a href='{{url("Delete"."/".$User->id)}}' class='btn btn-danger'>Del</a></td>
    
    @endforeach
    </tr>
  </tbody>
</table>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>