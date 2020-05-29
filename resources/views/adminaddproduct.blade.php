<!doctype html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="{{ url('styles/bootstrap4/bootstrap.min.css') }}">

</head>
<body>

<a href="{{ url('/adminredirect') }}"><button  class="btn btn-primary">Back</button></a>

<form method="post" id="formImgInp" action="/adminaddproduct" enctype="multipart/form-data">
						@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input name ="productname"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price(in Rupiah)</label>
    <input name="productprice" class="form" id="exampleInputPassword1">
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Product Image</label>
    <input accept="image/*"  id="upload" type="file" name="image" onchange="readURL(this);" class="form-control">
      </div>
 

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Product Description</label>
    <textarea name ="productdesc" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
  <div class="form-group col-md-4">
      <label for="inputState">Brand</label>
      <select name="productbrand" id="inputState" class="form-control">
      @foreach($databrand as $d)
        <option value="{{$d->brandid}}" >{{$d->brandName}}</option>
      @endforeach
      </select>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</body>
</html>

