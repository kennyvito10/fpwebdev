<!doctype html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="{{ url('styles/bootstrap4/bootstrap.min.css') }}">

</head>
<body>

<a href="{{ url('/adminviewproducts') }}"><button  class="btn btn-primary">Back</button></a>
@foreach($data as $d)
<form method="post" id="formImgInp" action="/editproduct/{{$d['productid']}}" enctype="multipart/form-data" >
@method('patch')
						@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input name ="productname"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$d['productName']}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price(in Rupiah)</label>
    <input name="productprice" class="form" id="exampleInputPassword1" value="{{$d['price']}}">
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Product Image</label>
    <input accept="image/*"  id="upload" type="file" name="image" onchange="readURL(this);" class="form-control">
      </div>
 

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Product Description</label>
    <textarea name ="productdesc" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$d['description']}}</textarea>
  </div>
  @endforeach
  
  <div class="form-group col-md-4">
      <label for="inputState">Brand</label>
      <select name="productbrand" id="inputState" class="form-control">
      @foreach($databrand as $d)
        <option value="{{$d['brandid']}}" >{{$d['brandName']}}</option>
      @endforeach
      </select>
  <button type="submit" class="btn btn-primary">Save</button>
</form>


</body>
</html>

