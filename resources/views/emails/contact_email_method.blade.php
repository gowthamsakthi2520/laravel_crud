
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mail send </title>
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


  <table>
    <tr><th>Username:</th><td>{{$contact_data['Username']}}</td></tr>
    <tr><th>Password:</th><td>{{$contact_data['Password']}}</td></tr>
    <tr><th>Email:</th><td>{{$contact_data['Email']}}</td></tr>
    <tr><th>Number:</th><td>{{$contact_data['Number']}}</td></tr>
    <tr><th>File:</th><td><img src="{{$contact_data['file']}}" alt="image"></td></tr>
  </table>

  <p>Thank You</p>

</body>

</html>