<?php

namespace App\Http\Controllers;
use App\Models\Shop;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $products = Shop::getAll();
        return view('home',[
            'products' => $products,
        ]);
    }
}
