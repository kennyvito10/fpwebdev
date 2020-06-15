<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use App\Bill;
use App\Billdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Response;
use Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    
    public function homeIndex()
    {
        if (Session::get('login') == FALSE) return view('welcome');
        $users = User::all();
        return view('dashboard', ['users' => $users]);
    }

    public function logout(Request $request) {
        Session::flush();
        $request->session()->regenerate();
        return Redirect::to(".");
    }

    public function sessioncheckcart(Request $request){
        if (Session::get('login') == FALSE){
            return view("signin");
        }
        else{
            $response = Http::withHeaders([
                'Accept' => 'application/json',
    
            ])->get('http://127.0.0.1:8080/api/auth/seecart', [
                "id"=>$request->session()->get('id')
                         
            ]);
            $user = json_decode($response->body(), true);
            $da = $user['da'];
            $count = $user['count'];
            $countda = $user['countda'];
            return view('/cart', compact("da","count","countda"));
           
        } 
    
    }

    public function deleteproductcart($billdetail)
        {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
    
            ])->delete('http://127.0.0.1:8080/api/auth/deleteproductcart/', [
                "billdetail"=>$billdetail 
            ]);
            $user = json_decode($response->body(), true);
            return Redirect::to("cart");
        }

    public function deleteallcart($currentbillid){
        $response = Http::withHeaders([
            'Accept' => 'application/json',

        ])->get('http://127.0.0.1:8080/api/auth/deletecart/', [
            "currentbillid"=>$currentbillid 
        ]);

        $user = json_decode($response->body(), true);
        return Redirect::to("cart");
    }

    public function order(Request $request){
        if (Session::get('login') == FALSE){
            return view("signin");
        }
        else{
            $response = Http::withHeaders([
                'Accept' => 'application/json',
    
            ])->get('http://127.0.0.1:8080/api/auth/vieworder/', [
                "id"=>$request->session()->get('id')
            ]);
    
            $user = json_decode($response->body(), true);
            $data = $user['data'];
            $count = $user['count'];
            return view('/orderhistory', compact("data","count"));

            
           
        } 
    }


    public function showhistory($historyid){
        if (Session::get('login') == FALSE){
            return view("signin");
        }
        else{

                $response = Http::withHeaders([
                    'Accept' => 'application/json',
        
                ])->get('http://127.0.0.1:8080/api/auth/showhistory/', [
                    "historyid"=>$historyid
                ]);
        
                $user = json_decode($response->body(), true);
                $da = $user['da'];
                $countda = $user['countda'];
        
            
            return view('/history', compact("da","countda"));
           
        } 
    }


    public function showallproducts(Product $product)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',

        ])->get('http://127.0.0.1:8080/api/auth/allproducts', [
            
                     
        ]);

        

        $user = json_decode($response->body(), true);

        $data = $user['data'];
        $count = $user['count'];
        

        return view('/allproducts', compact("data","count"));
    }


    public function showproductapple(Product $product)
    {

        $response = Http::withHeaders([
            'Accept' => 'application/json',

        ])->get('http://127.0.0.1:8080/api/auth/apple', [
            
                     
        ]);

        

        $user = json_decode($response->body(), true);

        $data = $user['data'];
        $count = $user['count'];
        
        
            
        return view('/apple', compact("data","count"));
    }

    public function showproductsamsung(Product $product)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',

        ])->get('http://127.0.0.1:8080/api/auth/samsung', [
            
                     
        ]);

        $user = json_decode($response->body(), true);

        $data = $user['data'];
        $count = $user['count'];
            
        return view('/samsung', compact("data","count"));
    }

    public function showproductoppo(Product $product)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',

        ])->get('http://127.0.0.1:8080/api/auth/oppo', [
            
                     
        ]);

        $user = json_decode($response->body(), true);

        $data = $user['data'];
        $count = $user['count'];
            
        return view('/oppo', compact("data","count"));
    }

    public function showproductxiaomi(Product $product)
    {

        $response = Http::withHeaders([
            'Accept' => 'application/json',

        ])->get('http://127.0.0.1:8080/api/auth/xiaomi', [  
        ]);

        $user = json_decode($response->body(), true);

        $data = $user['data'];
        $count = $user['count'];
            
        return view('/samsung', compact("data","count"));
    }

    public function showproduct($productid){
        $response = Http::withHeaders([
            'Accept' => 'application/json',

        ])->get('http://127.0.0.1:8080/api/auth/product', [  

            "productid"=>$productid  
        ]);

        $user = json_decode($response->body(), true);

        $data = $user['data'];
        $related_data = $user['related_data'];
        return view('product', compact("data", "related_data"));
    }

    public function addtocart(Request $request, $productid)
    {

        if (Session::get('login') == FALSE){
            return view("signin");
        }
        else{
        
            $response = Http::withHeaders([
                'Accept' => 'application/json',
    
            ])->post('http://127.0.0.1:8080/api/auth/addtocart', [  
                "id"=>$request->session()->get('id'),
                "productid"=>$productid,
                "quantity"=>$request->input('quantity')  
            ]);
    
            $user = json_decode($response->body(), true);
 
        return Redirect::to('/cart');
            }
    }

    public function sessioncheckout(Request $request){
        if (Session::get('login') == FALSE){
            return view("signin");
        }
        else{

            $response = Http::withHeaders([
                'Accept' => 'application/json',
    
            ])->get('http://127.0.0.1:8080/api/auth/seecheckout', [  
                "id"=>$request->session()->get('id'), 
            ]);
    
            $user = json_decode($response->body(), true);


            $da = $user['da'];
            $count = $user['count'];
            $countda = $user['countda'];
            


            return view('/checkout', compact("da","count","countda"));
        } 
    }

    public function checkoutorder(Request $request, $id){
        $response = Http::withHeaders([
            'Accept' => 'application/json',

        ])->patch('http://127.0.0.1:8080/api/auth/checkoutorder', [  
            "billid"=>$id 
        ]);

        $user = json_decode($response->body(), true);
    
    
 return Redirect::to("/dashboard");
}

    public function adminlogged()
    {
        if (!Session::get('admlogin')){
            return view('/admin');
        }else{

            $response = Http::withHeaders([
                'Accept' => 'application/json',
    
            ])->get('http://127.0.0.1:8080/api/auth/adminvieworder', [  
            ]);

            
    
            $user = json_decode($response->body(), true);
            $data = $user['data'];
            $datadelivered = $user['datadelivered'];
            $datafinished = $user['datafinished'];
            

            return view('/adminloggedin', compact("data","datadelivered","datafinished"));
        }
        
    }

    public function adminr()
    {
        if (!Session::get('admlogin')){
            return view('/admin');
        }else{
            return view('/adminredirect');
        }
    }

    public function adminviewproduct()
    {
        if (!Session::get('admlogin')){
            return view('/admin');
        }else{

            $response = Http::withHeaders([
                'Accept' => 'application/json',
    
            ])->get('http://127.0.0.1:8080/api/auth/getproduct', [  
            ]);
    
            $user = json_decode($response->body(), true);
            $data = $user['data'];


            return view('/adminviewproducts', compact('data'));
        }
    }

    public function adminproduct()
    {
        if (!Session::get('admlogin')){
            return view('/admin');
        }else{
            $response = Http::withHeaders([
                'Accept' => 'application/json',
    
            ])->get('http://127.0.0.1:8080/api/auth/getbrand', [  
            ]);
    
            $user = json_decode($response->body(), true);
            $databrand = $user['databrand'];

        return view('/adminaddproduct', compact('databrand'));
        }
    }
    
    public function adminproductadd(Request $request){
        $image = $request->file('image');
        $this->validate($request, [
            'image' => 'mimes:jpeg,png,bmp,tiff |max:4096',
        ],
        $messages = [
            'required' => 'The :attribute field is required.',
            'mimes' => 'Only jpeg, png, bmp,tiff are allowed.'
            ]
        );

        $input['imagename'] =  $image -> getClientOriginalName();
        $image_url = $input['imagename'];
        $destinationPath = public_path('/images');
        $image->move($destinationPath,$image_url);
        

        $addproduct = Http::withHeaders([
            'Accept' => 'application/json',

        ])->post('http://127.0.0.1:8080/api/auth/adminaddproduct', [  
            "productname" => $request->input('productname'), 
            "productprice" => $request->input('productprice'),
            "image_url" => $image_url ,
            "productbrand" => $request->input('productbrand'), 
            "productdesc"=> $request->input('productdesc')
        ]);

        $ap = json_decode($addproduct->body(), true);

        $response = Http::withHeaders([
            'Accept' => 'application/json',

        ])->get('http://127.0.0.1:8080/api/auth/getbrand', [  
        ]);

        $user = json_decode($response->body(), true);
        $databrand = $user['databrand'];
        return view('/adminaddproduct', compact('databrand'));

    }


    public function updateAdminStatusDelivered(Request $request, $id){
        $response = Http::withHeaders([
            'Accept' => 'application/json',

        ])->patch('http://127.0.0.1:8080/api/auth/updateadminstatusdelivered', [  
            "billid"=>$id 
        ]);

        $user = json_decode($response->body(), true);
    
    
 return Redirect::to("/adminloggedin");
}

public function updateAdminStatusFinished(Request $request, $id){
    $response = Http::withHeaders([
        'Accept' => 'application/json',

    ])->patch('http://127.0.0.1:8080/api/auth/updateadminstatusfinished', [  
        "billid"=>$id 
    ]);

    $user = json_decode($response->body(), true);


return Redirect::to("/adminloggedin");
}

public function deletep($id)
        {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
    
            ])->delete('http://127.0.0.1:8080/api/auth/deletep/', [
                "productid"=>$id 
            ]);
            $user = json_decode($response->body(), true);
            return Redirect::to("adminviewproducts");
        }

        public function viewproductedit($pid){
            $response = Http::withHeaders([
                'Accept' => 'application/json',
    
            ])->get('http://127.0.0.1:8080/api/auth/getproductbyid', [ 
                "productid"=>$pid 
            ]);
    
            $user = json_decode($response->body(), true);
            $data = $user['data'];

            $brand = Http::withHeaders([
                'Accept' => 'application/json',
    
            ])->get('http://127.0.0.1:8080/api/auth/getbrand', [  
            ]);
    
            $brandd = json_decode($brand->body(), true);
            $databrand = $brandd['databrand'];
            return view('avp', compact("data","databrand"));
        }

        public function adminproductedit(Request $request,$id){
            $image = $request->file('image');
            $this->validate($request, [
                'image' => 'mimes:jpeg,png,bmp,tiff |max:4096',
            ],
            $messages = [
                'required' => 'The :attribute field is required.',
                'mimes' => 'Only jpeg, png, bmp,tiff are allowed.'
                ]
            );
    
            $input['imagename'] =  $image -> getClientOriginalName();
            $image_url = $input['imagename'];
            $destinationPath = public_path('/images');
            $image->move($destinationPath,$image_url);
    
            $addproduct = Http::withHeaders([
                'Accept' => 'application/json',
    
            ])->patch('http://127.0.0.1:8080/api/auth/admineditproduct', [ 
                "pid"=> $id,
                "productname" => $request->input('productname'), 
                "productprice" => $request->input('productprice'),
                "image_url" => $image_url ,
                "productbrand" => $request->input('productbrand'), 
                "productdesc"=> $request->input('productdesc')
            ]);
    
            $ap = json_decode($addproduct->body(), true);
            return view('/adminviewproducts');
    
        }


}
