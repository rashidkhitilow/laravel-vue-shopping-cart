<?php

namespace App\Http\Controllers\Api;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){
        return Product::with("categories:id,name")->get();
    }
    public function show($slug){
        return Product::where('slug', $slug)->get();
    }
}
