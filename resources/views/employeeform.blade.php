<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
        <h1>Image-crud in laravel</h1>
        <table class="table table-stripped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">Email</th>
      <th scope="col">post</th>
      <th scope="col">image</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
        @foreach($employees as $employee)
    <tr>
      <th>{{$employee->id}}</th>
      <th>{{$employee->name}}</th>
      <th>{{$employee->email}}</th>
      <th>{{$employee->post}}</th>
      <th><img src="{{ asset('uploads/employee/' .  $employee->image) }}" width="100px" height="100px" alt="image" ></th>
      <th> <a href="/editimage/{{$employee->id}}" class="btn btn-success"> Edit</a> </th>
      <th> <a href="/deleteimage/{{$employee->id}}" class="btn btn-danger"> Delete</a> </th>
    </tr>
    @endforeach
</tbody>
</table>
         </div>
    </div>
</body>
</html>
