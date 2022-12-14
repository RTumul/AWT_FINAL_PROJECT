<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;


class VendorControllers extends Controller
{
    //
    function regAsVen(){
        return view('vendor.regAsVen');
    }

    function create(Request $req){
        $this->validate($req,
            [
                "name"=>"required|max:50|min:3",
                "dob"=>"required",
                "email"=>"required|regex:/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/",
                "password"=>"required|min:8",
                "conf_password"=>"required|min:8|same:password",
                "address" => "required|"
            ],
        
            [
                "name.required"=>"Please provide your name",
                "name.max"=>"Name should not exceed 10 characters",

                
            ]);
            $user = new User();
            $user->name = $req->name;
            $user->email =$req->email;
            $user->dob = $req->dob;
            $user->password = $req->password;
            $user->address = $req->address;
            $user->u_type = "vendor";

            $user->save();
            return redirect()->route('index.home');
        
    }


    function loginAuth(Request $req){
        $req->validate(
          [
              "email" => "required",
              "password" => "required"
          ]
       );
       $users = user::where('email', '=',$req -> email)->first();
       
       if($users){
             if($req->password == $users->password){
               if($users -> u_type == 'admin'){
               return view("Admin");
           }
           else{
               session()->put('logged',$users->id);
               return redirect()->route('vendor.dashboard');
               
           }

             }
             else{
                 return "Wrong password";
             }
       }
       else{
           return "Email doesn't exist";
       }
   }


   function dashboard(){

    $users = user::where('id',session()->get('logged'))->first();
    
    return view('vendor.dashboard')->with('users',$users);
}

 function productList()
 {
     $product = product::where('u_id', session()->get('logged'))->get();
     return view('vendor.products')->with('product',$product);
 }

function productEdit($id){
    $products = product::find($id);
    return view('vendor.edit',['products'=>$products]);

     
}


public function deleteProduct($product)
    {
        $product = Product::find($product);
        $product->delete();
        return redirect()->route('products');
    }

    public function updateProduct(Request $req){

        $this->validate($req,[]);
        
        $product = Product::find($req->id);
        

        $ext = $req->file('productImage')->getClientOriginalName();
        $picture = $req->name.time().".".$ext;
        $req->file('productImage')->storeAs('public/product_image', $picture);

        $product->name = $req->name;
        $product->price = $req->price;
        $product->image = $picture;
        
        $product->save();

        return redirect()->route('products');
    }

    function uploadProduct(){
        return view('vendor.productUpload');
    }

    function validateProduct(Request $req){
        $this->validate($req, [
            'name' => 'required|regex:/^[a-zA-z]+$/u',
            'price' => 'required',
            'productImage' => 'required',
        ]);

        $ext = $req->file('productImage')->getClientOriginalName();
        $picture = $req->name.time().".".$ext;
        $req->file('productImage')->storeAs('public/product_image', $picture);

        $uid = session()->get('logged');
        

        $product = new Product();
        $product->name = $req->name;
        $product->price = $req->price;
        $product->u_id = $uid;
        $product->image = $picture;

        $product->save();

        return redirect('/vendorDashboard/products');


    }

    

   
}

    

