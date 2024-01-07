<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Shop extends Model
{
    use HasFactory;
    public static function getAll(){
        $products = DB::table('products')->get();
        return $products;
    }

    public static function detail($id){
        $product = DB::table('products')->where('id',$id)->get();
        return $product;
    }
}
