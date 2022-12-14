<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Token;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use DateTime;

class apiController extends Controller
{
    //
    

    function create(Request $req){
        $validator = Validator::make($req->all(),[
            "name" => "required",
            "email" => "required",
            "dob" => "required",
            "password" => "required",
            "address" => "required"
        ]);
        if ($validator -> fails()){
            return response() -> json($validator->errors());
        }
        
        $users = new User();
        $users -> name = $req -> name;
        $users -> email = $req -> email;
        $users -> dob = $req -> dob;
        $users -> password = $req -> password;
        $users -> address = $req -> address;
        $users -> u_type = "vendor";
        

        $users -> save();
        return response()->json(
            [
                "msg" => "Added Successfully",
                "data" => $users
            ]
            );
   }

   
function login(Request $req){
    $validator = Validator::make($req->all(),[
        
        "email"=>"required|email",
        "password"=>"required|min:8"
    ],
    [
        'password.regex' => 'Must contain special character, number, uppercase and lowercase letter.'
    ]);
    
    if($validator->fails()){
        return response()->json($validator->errors(),422);
    }
    $user = user::where('email', '=',$req -> email)->first();
    
    if($user){
        if($req->password == $user->password){
          if($user -> u_type == 'vendor'){
            $key = Str::random(67);
            $token = new token();
            $token->tkey = $key;
            $token->u_id = $user->id;
            $token->name = $user->name;
            $token->u_type = $user->u_type;
            $token->created_at = new Datetime();
            $token->save();
        return response()->json(
            [
                "login_msg"=>"Login Successfull",
                "user_type"=>$req->user_type, 
                "user"=>$user, 
                "token"=>$token      
            ]
        );
    }
    else{
        return response()->json(
            [
                "msg"=>"Username/Password is invalid"
            ]
            );
    }
          
        }
    }
    
    
    
}

function products($id){
    $products =Product::where('u_id', '=', $id)->get();
    return response()->json($products);
}

function productDetails($id){
    $product = Product::find($id);
    return response()->json($product);

}


function productEdit(Request $req){
    $this->validate($req,[]);
    
    $product = Product::find($req->id);
    
    $ext = $req->file('productImage')->getClientOriginalName();
    $picture = $req->name.time().".".$ext;
    $req->file('productImage')->storeAs('public/product_image', $picture);

    $product->name = $req->name;
    $product->price = $req->price;
    $product->image = $picture;

    $product->save();
    return response()->json($product);

}

function uploadProduct(Request $req, $id){
    $validator = Validator::make($req->all(),[
        "name" => "required",
        "price" => "required",
        //"image" => "required"
        
    ]);
    if ($validator -> fails()){
        return response() -> json($validator->errors());
    }
    

    // $ext = $req->file('productImage')->getClientOriginalName();
    // $picture = $req->name.time().".".$ext;
    // $req->file('productImage')->storeAs('public/product_image', $picture);
    
    $product = new Product();
    $product -> name = $req -> name;
    $product -> price = $req -> price;
    $product -> u_id = $id;
    //$product -> image = $picture;
    
    

    $product -> save();
    return response()->json(
        [
            "msg" => "Added Successfully",
            "data" => $product
        ]
        );
}

function deleteProduct($id){
    
        $product =Product::find($id);
        $product->delete();

        return response()->json(
            [
                "msg"=>"Deleted Successfully"
            ]
            );
}




function logout(Request $req){
    $key = $req->key;
    $token = token::where('tkey',$key)->first();
    $token->expired_at = new Datetime();
    $token->save();
    return response()->json(["msg"=>"Logged out"]);
}


}


