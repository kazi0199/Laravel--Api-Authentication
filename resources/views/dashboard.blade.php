<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    
<div class="container">
  <div class="row" style="margin: 20px;">
    <div class="col-6">
     <h6 style="background-color:aqua; padding: 5px;">You are successfully logged in!</h6>
     <h1  style="background-color:rgb(188, 255, 3); padding: 5px;">Welcome :- {{Auth::user()->name}}</h1>

    </div>
  </div>
  <div class="row">
    <div class="col-6">

    <a href="{{route('inner')}}" class="btn btn-primary">Go to Inner page</a>

    <a href="{{route('logout')}}" class="btn btn-danger">Logout</a>

    </div>
  </div>
</div>


</body>
</html>