<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data ['products'] = Product::with('category')->get();

        return view('product/index', $data);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data ['categories'] = Category::all();

        return view('product.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_name' => 'required',
            'price_product' => 'required|numeric',
            'product_descripstion' => 'required',
            'category_id' => 'required'
        ]);

        Product::create([
            'name'=>$validated['product_name'],
            'price'=>$validated['price_product'],
            'description'=>$validated['product_descripstion'],
            'category_id'=>$validated['category_id']
        ]);

        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data ['categories'] = Category::all();
        $data ['product'] = Product::find($id);
        return view('/product/edit', $data);
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
        $validated = $request->validate([
            'product_name' => 'required',
            'price_product' => 'required|numeric',
            'product_descripstion' => 'required',
            'category_id' => 'required'
        ]);

        Product::where('id', $id)->update([
            'name' => $validated['product_name'],
            'price' => $validated['price_product'],
            'description' => $validated['product_descripstion'],
            'category_id' => $validated['category_id']
        ]);

        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return redirect('/product');
    }
}
