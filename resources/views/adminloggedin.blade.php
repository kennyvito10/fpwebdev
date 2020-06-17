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

  <div id="main_content">

 <li class="selected" id="page1" onclick="change_tab(this.id);">Ordered</li>
 <li class="notselected" id="page2" onclick="change_tab(this.id);">Delivered</li>
 <li class="notselected" id="page3" onclick="change_tab(this.id);">Finished</li>
 
 <div class='hidden_desc' id="page1_desc">
 <table class="table table-borderless">
  <thead>
    <tr>
    <th scope="col">Bill Id </th>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer Id</th>
      <th scope="col">Customer Address</th>
      <th scope="col">Status</th>
      <th scope="col">Date And Time</th>
      <th scope="col">Edit</th>

      <!-- <th scope="col">Date</th> -->
    </tr>
  </thead>
  <tbody>
  @foreach($data as $d)
    <tr>
      <th scope="row">{{$d['billid']}}</th>
      <?php
      $decoded = Http::get(env('API_URL2', '34.101.73.220').'/api/auth/viewuser/'.$d['user_id'])[0]
      ?>
      <td>{{$decoded['fullName']}}</td>
      <td>{{$d['user_id']}}</td>
      <td>{{$decoded['address']}},
      {{$decoded['city']}},
      {{$decoded['province']}},
      {{$decoded['postalCode']}},
      {{$decoded['notes']}},
      </td>
      <td>{{$d['statusname']}}</td>
      <td>{{$d['created_at']}}</td>
      <td>
      <form method="post" action="updatestatusdelivered/{{$d['billid']}}" style="display:inline-block">
                                @method('patch')
                                @csrf  
                                <button type="submit" class="btn btn-primary">Deliver</button></a>
      
                              </form></td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>

 <div class='hidden_desc' id="page2_desc">
 <table class="table table-borderless">
  <thead>
    <tr>
    <th scope="col">Bill Id </th>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer Id</th>
      <th scope="col">Customer Address</th>
      <th scope="col">Status</th>
      <th scope="col">Date And Time</th>
      <th scope="col">Edit</th>

    </tr>
  </thead>
  <tbody>
  @foreach($datadelivered as $d)
    <tr>
      <th scope="row">{{$d['billid']}}</th>
      <?php
      $decoded = Http::get(env('API_URL2', '34.101.73.220').'/api/auth/viewuser/'.$d['user_id'])[0]
      ?>
      <td>{{$decoded['fullName']}}</td>
      <td>{{$d['user_id']}}</td>
      <td>{{$decoded['address']}},
      {{$decoded['city']}},
      {{$decoded['province']}},
      {{$decoded['postalCode']}},
      {{$decoded['notes']}},
      </td>
      <td>{{$d['statusname']}}</td>
      <td>{{$d['created_at']}}</td>
      <td>
      <form method="post" action="updatestatusfinished/{{$d['billid']}}" style="display:inline-block">
                                @method('patch')
                                @csrf  
                                <button type="submit" class="btn btn-primary">Finish</button></a>
      
                              </form></td>
    </tr>
    @endforeach
    
  </tbody>
</table></div>
 
 <div class='hidden_desc' id="page3_desc">
 <table class="table table-borderless">
  <thead>
    <tr>
    <th scope="col">Bill Id </th>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer Id</th>
      <th scope="col">Customer Address</th>
      <th scope="col">Status</th>
      <th scope="col">Date And Time</th>

    </tr>
  </thead>
  <tbody>
  @foreach($datafinished as $d)
    <tr>
      <th scope="row">{{$d['billid']}}</th>
      <?php
      $decoded = Http::get(env('API_URL2', '34.101.73.220').'/api/auth/viewuser/'.$d['user_id'])[0]
      ?>
      <td>{{$decoded['fullName']}}</td>
      <td>{{$d['user_id']}}</td>
      <td>{{$decoded['address']}},
      {{$decoded['city']}},
      {{$decoded['province']}},
      {{$decoded['postalCode']}},
      {{$decoded['notes']}},
      </td>
      <td>{{$d['statusname']}}</td>
      <td>{{$d['created_at']}}</td>
      
    @endforeach
    
  </tbody>
</table>
</div>
 
 <div id="page_content">
 <table class="table table-borderless">
  <thead>
    <tr>
    <th scope="col">Bill Id </th>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer Id</th>
      <th scope="col">Customer Address</th>
      <th scope="col">Status</th>
      <th scope="col">Date And Time</th>
      <th scope="col">Edit</th>

    </tr>
  </thead>
  <tbody>
  @foreach($data as $d)
    <tr>
      <th scope="row">{{$d['billid']}}</th>
      <?php
      $decoded = Http::get(env('API_URL2', '34.101.73.220').'/api/auth/viewuser/'.$d['user_id'])[0]
      ?>
      <td>{{$decoded['fullName']}}</td>
      <td>{{$d['user_id']}}</td>
      <td>{{$decoded['address']}},
      {{$decoded['city']}},
      {{$decoded['province']}},
      {{$decoded['postalCode']}},
      {{$decoded['notes']}},
      </td>
      <td>{{$d['statusname']}}</td>
      <td>{{$d['created_at']}}</td>
      <td>
      <form method="post" action="updatestatusdelivered/{{$d['billid']}}" style="display:inline-block">
                                @method('patch')
                                @csrf  
                                <button type="submit" class="btn btn-primary">Deliver</button></a>
      
                              </form></td>
    </tr>
    @endforeach
    
  </tbody>
</table>
 </div>
 
</div>
 
</body>
</html>