<?php

namespace App\Http\Controllers\product;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){
        $prod = Product::all();
        $cat = Category::all();
        return view('admin.product.index',compact('prod','cat'));
    }
}
