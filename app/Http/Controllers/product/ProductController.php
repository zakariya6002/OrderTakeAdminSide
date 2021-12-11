<?php

namespace App\Http\Controllers\product;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod = Product::all();
        $cat = Category::all();
        return view('admin.product.index',compact('prod','cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Category::all();
        return view('admin.product.backend.create', compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create([
            'product_name'=>$request->product_name,
            'product_sku'=>$request->product_sku,
            'product_description'=>$request->product_description,
            'product_price'=>$request->product_price,
            'category_id'=>$request->category_id,
            'product_feature_image'=>$request->product_feature_image

        ]);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Category::all();
        $prod = Product::find($id);
        return view('admin.product.backend.edit',compact('prod','cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prod = Product::find($id);
        $prod -> update([
            'product_name'=>$request->product_name,
            'product_sku'=>$request->product_sku,
            'product_description'=>$request->product_description,
            'product_price'=>$request->product_price,
            'category_id'=>$request->category_id,
            'product_feature_image'=>$request->product_feature_image
        ]);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod = Product::find($id);
        $prod ->delete();
        return redirect()->route('products.index');
    }
}
