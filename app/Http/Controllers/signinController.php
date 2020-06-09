<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use App\Address;
use Response;
use Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Http;

class signinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sessionchecksignup(){
        if (Session::get('login') == FALSE){
            return view("signup");
        }
        else{
            return Redirect::to("/");
        } 
    }

    public function sessionchecksignin(){
        if (Session::get('login') == FALSE){
            return view("signin");
        }
        else{
            return Redirect::to("/");
        } 
    }

    
    

    public function sessioncheckaboutus(){
        if (Session::get('login') == FALSE){
            return view("aboutus");
        }
        else{
            return view("aboutusignedin");
        } 
    }

    public function sessioncheckprofile(Request $request){
        if (Session::get('login') == FALSE){
            return view("signin");
        }
        else{

            $api = Http::withHeaders([
                'Accept' => 'application/json',
    
            ])->get('http://127.0.0.1:8080/api/auth/getUserToken', [
                
                "email"=>$request->session()->get('email')
                
            ]);
            $apitoken = json_decode($api->body(), true);
    
    
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => 'Bearer '.$apitoken
    
            ])->get('http://127.0.0.1:8080/api/auth/seeprofile', [
                
                "email"=>$request->session()->get('email')           
            ]);

            $user = json_decode($response->body(), true);
    
            
            foreach ($user as $dat) {
                $id = $dat['id'];
                $email = $dat['email'];
                $fullName = $dat['fullName'];
                $phoneNumber = $dat['phoneNumber'];
                $addressID = $dat['addressID'];
                $province = $dat['province'];
                $city = $dat['city'];
                $address = $dat['address'];
                $postalCode = $dat['postalCode'];
                $notes = $dat['notes'];

                Session::put('id',$id);
                Session::put('email',$email);
                Session::put('fullName',$fullName);
                Session::put('phoneNumber',$phoneNumber);
                Session::put('addressID',$addressID);
                Session::put('province',$province);
                Session::put('city',$city);
                Session::put('address',$address);
                Session::put('postalCode',$postalCode);
                Session::put('notes',$notes);
                Session::put('login',TRUE);
            }
            return view("profile");
        } 
    }

    public function publicIndex(Request $request)
    {
        if (Session::get('login') == FALSE){
            return Redirect::to("/");
        } 
        else{

            $api = Http::withHeaders([
                'Accept' => 'application/json',
    
            ])->get('http://127.0.0.1:8080/api/auth/getUserToken', [
                
                "email"=>$request->session()->get('email')
                
            ]);
            $apitoken = json_decode($api->body(), true);
    
    
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => 'Bearer '.$apitoken
    
            ])->get('http://127.0.0.1:8080/api/auth/seeprofile', [
                
                "email"=>$request->session()->get('email')           
            ]);

            $user = json_decode($response->body(), true);
    
            
            foreach ($user as $dat) {
                $id = $dat['id'];
                $email = $dat['email'];
                $fullName = $dat['fullName'];
                $phoneNumber = $dat['phoneNumber'];
                $addressID = $dat['addressID'];
                $province = $dat['province'];
                $city = $dat['city'];
                $address = $dat['address'];
                $postalCode = $dat['postalCode'];
                $notes = $dat['notes'];

                Session::put('id',$id);
                Session::put('email',$email);
                Session::put('fullName',$fullName);
                Session::put('phoneNumber',$phoneNumber);
                Session::put('addressID',$addressID);
                Session::put('province',$province);
                Session::put('city',$city);
                Session::put('address',$address);
                Session::put('postalCode',$postalCode);
                Session::put('notes',$notes);
                Session::put('login',TRUE);
            }
            

            return view('dashboard');
        }
    }

    public function login(Request $request){

        $api = Http::withHeaders([
            'Accept' => 'application/json',

        ])->get('http://127.0.0.1:8080/api/auth/getUserToken', [
            
	        "email"=>$request->input('email'),
            
        ]);
        $apitoken= json_decode($api->body(), true);

        if($apitoken[0] === 401){
            return Redirect::to(URL::previous())->with('message', 'Invalid Email and or Passwords');
        }


        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer '.$apitoken

        ])->post('http://127.0.0.1:8080/api/auth/login', [
            
	        "email"=>$request->input('email'),
	        "password"=>$request->input('password'),
            
        ]);

        $user = json_decode($response->body(), true);
        if($user[0] === 401){
            return Redirect::to(URL::previous())->with('message', 'Invalid Email and or Passwords');
        }
        else{
            // dump($user[0]);
            foreach ($user as $dat) {
                $id = $dat['id'];
                $email = $dat['email'];
                $fullName = $dat['fullName'];
                $phoneNumber = $dat['phoneNumber'];
                $addressID = $dat['addressID'];
                $province = $dat['province'];
                $city = $dat['city'];
                $address = $dat['address'];
                $postalCode = $dat['postalCode'];
                $notes = $dat['notes'];

            }

            Session::put('id',$id);
            Session::put('email',$email);
            Session::put('fullName',$fullName);
            Session::put('phoneNumber',$phoneNumber);
            Session::put('addressID',$addressID);
            Session::put('province',$province);
            Session::put('city',$city);
            Session::put('address',$address);
            Session::put('postalCode',$postalCode);
            Session::put('notes',$notes);
            Session::put('login',TRUE);
        }
        // $res= json_decode($response->body(), true);
        // foreach ($res as $dat) {
            // Session::put('id',$dat['id']);
            // Session::put('email',$dat->email);
            // Session::put('fullName',$dat->fullName);
            // Session::put('phoneNumber',$dat->phoneNumber);
            // Session::put('addressID',$dat->addressid);
            // Session::put('province',$dat->province);
            // Session::put('city',$dat->city);
            // Session::put('address',$dat->address);
            // Session::put('postalCode',$dat->postalCode);
            // Session::put('notes',$dat->notes);
            // Session::put('login',TRUE);

        // }

        // $email = $request->input("email");
        // $password = $request->input("password");

        // $users = User::all()->where('email', $email);
        // $count = $users->count();
        // if ($count == 0) {
        //     return Redirect::to(URL::previous())->with('message', 'Invalid E-mail and or Passwords');
        //     }
        //     else{
        //     $data = DB::table('users')
        //             ->where('email',$email)
        //                 -> get();
        //     foreach($data as $data) {
        //         $hashedpw = $data->password;
        //     }

        //     if(Hash::check($password, $hashedpw)){
        //     $data = DB::table('users')
        //                 -> join('addresses','addresses.addressid','=','users.addressID')
        //                 ->where('email',$request->input("email"))
        //                 -> get();
        //     foreach ($data as $dat) {
        //         Session::put('id',$dat->id);
        //         Session::put('email',$dat->email);
        //         Session::put('fullName',$dat->fullName);
        //         Session::put('phoneNumber',$dat->phoneNumber);
        //         Session::put('addressID',$dat->addressid);
        //         Session::put('province',$dat->province);
        //         Session::put('city',$dat->city);
        //         Session::put('address',$dat->address);
        //         Session::put('postalCode',$dat->postalCode);
        //         Session::put('notes',$dat->notes);
        //         Session::put('login',TRUE);

        //     }
        //         return view('dashboard');
        //     }

            
        // }
        //return dump($users);
        return view('dashboard');
    }


    public function signup(Request $request){
		// if (Session::get('id') == "") return Redirect::to(".");
        // return view('signup');	
            
        // $address = new Address;
        // $address->province =  $request->input('province');
        // $address->city =  $request->input('city');
        // $address->address =  $request->input('address');
        // $address->postalCode =  $request->input('postalCode');
        // $address->notes =  $request->input('notes');
        // $address->save();

        // // $address->dp_url =  $request->session()->get('dp_urls');
        // $address_id = DB::table('addresses')->get()->last()->addressid;

        // // $request->session()->put('address_ids', $address_ids);
        // User::create([
        //     'email' => $request->input('email'),
        //     'password' => Hash::make($request->input('password')),
        //     'fullName' => $request->input('fullName'),
        //     'phoneNumber' => $request->input('phoneNumber'),
        //     'addressID' => $address_id
        // ]);

        $response = Http::withHeaders([
            'Accept' => 'application/json',

        ])->post('http://127.0.0.1:8080/api/auth/signup', [
            "province"=>$request->input('province'),
	"city"=>$request->input('city'),
	"address"=>$request->input('address'),
	"postalCode"=>$request->input('postalCode'),
	"notes"=>$request->input('notes'),
	"email"=>$request->input('email'),
	"password"=>Hash::make($request->input('password')),
	"fullName"=>$request->input('fullName'),
	"phoneNumber"=>$request->input('phoneNumber')
            
        ]);
        $res= json_decode($response->body(), true);
        //return $res;
        return view('/signin');
        }


    public function updateAppStatus(Request $request, $id){
        
            // $data = [
            //     'email' => $request->input('email'),
            // 'fullName' => $request->input('fullName'),
            // 'phoneNumber' => $request->input('phoneNumber'),
            // ];

            // $adr = [
            //     'province' => $request->input('province'),
            //     'city' => $request->input('city'),
            //     'address' => $request->input('address'),
            //     'postalCode' => $request->input('postalCode'),
            //     'notes' => $request->input('notes'),
            
            // ];
    
            // // if id equals with $id from specific data to be updated
            // Address::where('addressid', $request->session()->get('addressID'))->update($adr);
            // User::where('id',$id)->update($data);

            $api = Http::withHeaders([
                'Accept' => 'application/json',
    
            ])->get('http://127.0.0.1:8080/api/auth/getUserToken', [
                
                "email"=>$request->session()->get('email')
                
            ]);
            $apitoken = json_decode($api->body(), true);
    
    
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => 'Bearer '.$apitoken
    
            ])->patch('http://127.0.0.1:8080/api/auth/updateprofile', [
                
                "email"=>$request->session()->get('email'),
                "fullName" => $request->input('fullName'),
                "phoneNumber" => $request->input('phoneNumber'),
                "province" => $request->input('province'),
                "city" => $request->input('city'),
                "address" => $request->input('address'),
                "postalCode" => $request->input('postalCode'),
                "notes" => $request->input('notes'),
                "addressID" => $request->session()->get('addressID'),
                "id" => $request->session()->get('id')

            ]);

            $user = json_decode($response->body(), true);
        
        
     return Redirect::to("/dashboard");
    }



    public function admin(Request $request){
        $us = $request->input("adminuser");
        $pass = $request->input("pw");

        if($us == 'admin' and $pass == 'kwcell123456789'){
            Session::put('admlogin',TRUE);
            return view("/adminredirect");        }
        else{
            return Redirect::to(URL::previous())->with('message', 'Invalid User and or Passwords');
        }

            
    }

    
    


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
