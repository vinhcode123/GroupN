<?php

namespace App\Http\Controllers;
use App\Models\Categorys;
use App\Models\Products;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use Termwind\Components\Dd;

class CartController extends Controller
{
    public function getProductsById($id)
    {
        $products = Products::where('id', $id)->first();
        
        return view('trangchitiet', compact('users'));
        // return redirect("login")->withSuccess('Login details are not valid');
    }
}
