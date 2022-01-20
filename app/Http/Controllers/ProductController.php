<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
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
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function insertProductIndex(){
        return view('product.insert', [
            'title' =>  'LAUCT | Insert New Product',
            'category' => Category::all()
        ]);
    }

    public function store(Request $request)
    {

        $validated_data = $request->validate([
            'category_id' => 'required',
            'product_name' => 'required|min:5|max:25',
            'product_description' => 'required|min:10|max:100',
            'price' => 'required|numeric|between:1000,10000000',
            'dateTime' => 'required|date|after:tomorrow',
            'product_image' => 'image|file'
        ]);

        $validated_data['dateTime'] = Carbon::parse($validated_data['dateTime'])->format('Y-m-d H:i:s');

        $validated_data['highest_bid'] == 1;

        $validated_data['product_image'] = 'storage/' . $request->file('product_image')->store('images/product');

        Product::create($validated_data);

        return back()->with('insertSuccess', 'Insert Product Success!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('product.index', [
            'product' => $product,
            'title' => 'LAUCT | ' 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showHome($cateId)
    {
       $prod = Product::where('category_id', $cateId);
       $cateTitle = Category::where('category_id', $cateId)->first();
       $dt = Carbon::now();
       return view ('home.category', [
           'product' => $prod->paginate(5),
            'title' => 'LAUCT | ' . $cateTitle->category_name,
            'time' => $dt,
       ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
