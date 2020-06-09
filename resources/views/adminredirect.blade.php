<!doctype html>
<html>

<head>

<link rel="stylesheet" type="text/css" href="{{ url('styles/bootstrap4/bootstrap.min.css') }}">

</head>
<body>
  <a href="{{ url('/logout') }}"><button  class="btn btn-primary">Logout</button></a>
  <a href="{{ url('/adminloggedin') }}"><button  class="btn btn-primary">View Sales</button></a>
  <a href="{{ url('/adminviewproducts') }}"><button  class="btn btn-primary">View Products</button></a>
  <a href="{{ url('/adminaddproduct') }}"><button  class="btn btn-primary">Add Products</button></a>
</body>
</html>