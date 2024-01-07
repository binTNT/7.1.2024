<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
class ShopController extends Controller
{
    //
    public function index(){
        $products = Shop::getAll();
        return view('shop',[
            'products' => $products,
        ]);
    }

    public function detail($id){
        $product = Shop::detail($id);
        return view('product',[
            'product' => $product[0],
        ]);
    }
}
