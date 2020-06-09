<!doctype html>
<html>

<head>

<link rel="stylesheet" type="text/css" href="{{ url('styles/bootstrap4/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{url('styles/tabs_style.css')}}">
<script>
 function change_tab(id)
 {
   document.getElementById("page_content").innerHTML=document.getElementById(id+"_desc").innerHTML;
   document.getElementById("page1").className="notselected";
   document.getElementById("page2").className="notselected";
   document.getElementById("page3").className="notselected";
   document.getElementById(id).className="selected";
 }
</script>
</head>
<body>
  <a href="{{ url('/logout') }}"><button  class="btn btn-primary">Logout</button></a>
  <a href="{{ url('/adminredirect') }}"><button  class="btn btn-primary">Back</button></a>
 <table class="table table-borderless">
  <thead>
    <tr>
    <th scope="col">Product Id </th>
      <th scope="col">Product name</th>
      <th scope="col">Price</th>
      <th scope="col">Img URL</th>
      <th scope="col">Brand ID</th>
      <th scope="col">Description</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>

      <!-- <th scope="col">Date</th> -->
    </tr>
  </thead>
  <tbody>
  @foreach($data as $d)
    <tr>
      <th scope="row">{{$d['productid']}}</th>
      <td>{{$d['productName']}}</td>
      <td>{{$d['price']}}</td>
      <td><img src="images/{{$d['imgUrl']}}" alt="Not Found" style="width:100px;height:100px"></td>
      <td>{{$d['brand_id']}}</td>
      <td>{{$d['description']}}</td>
      <td><a href="avp/{{$d['productid']}}">Edit</a></td>
      <td><form action="/deletep/{{$d['productid']}}" method="post" class="d-inline">
						@method('delete')
						@csrf
						<button class="btn btn-primary">Delete</button>
						</form></td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>
 
</body>
</html>