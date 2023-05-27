<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Products;
class homeController extends Controller
{
   public function trangchu(){
        
        // if(Auth::check()){
        //     $user = User::All();
        //     $users = User::paginate(2);
        //      return view('trangchu' , compact('users'));
        // }
        // return redirect("login")->withSuccess('You are not allowed to access');
        $products = Products::all();
return view('index', ['products' => $products]);
    }

    //
}