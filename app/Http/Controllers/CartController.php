<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
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
    public function store(Request $request)
    {

        if($request->session()){
            // dd((int)$request->yourBid < (int)$request->intial_bid);

            // dd($request->yourBid);
            // dd($request->intial_bid);

            $initial_bid = Product::where(
                'product_id', $request->product_id
                
            )->first();
            
            $user_id = $request->user_id;
            $product_id = $request->product_id;
            $bidPrice = $request->yourBid;

            if((int)$request->yourBid < (int)$initial_bid->intial_bid){
                return back()->with('bidError', 'Bid Invalid!');
            }
            
            if(Cart::where('product_id', $product_id)->first() !== null){
                if (Product::where('product_id', $product_id) ->first()->highest_bid < $bidPrice){
                    $product = Product::where('product_id', $product_id)->first();
                    $curr_high_bidder = $product->highest_bid;

                    $diff_bid = Cart::where('product_id', $product_id)->where('user_id', $curr_high_bidder)->first();
                    $diff_bid->status_bid = 0;

                    $bid = new Cart();
                    $bid->yourBid = $bidPrice;
                    $bid->product_id = $product_id;
                    $bid->user_id = $user_id;
                    $bid->status_bid = 1;

                    $product->highest_bid = $bidPrice;
                    $product->highest_bid_id = $user_id;

                    $diff_bid->save();
                    $bid->save();
                    $product->save();
                }

            } else{
                $else_bid = new Cart();
                $else_bid->yourBid = $bidPrice;
                $else_bid->product_id = $product_id;
                $else_bid->user_id = $user_id;
                $else_bid->status_bid = 1;
                $else_bid->save();
                
                $product = Product::where('product_id', $product_id)->first();
                $product->highest_bid_id = $user_id;
                $product->highest_bid = $bidPrice;
                $product->save();
                
            }

            return back()->with('addToCartSuccess', 'Add To Cart Success!');
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function store_transaction(Request $request){
        $cart_bid = Cart::where('cart_id', $request->cart_id)->first();

        $now = now()->toDate();
        $transaction = new Transaction();
        $transaction->user_id = auth()->user()->user_id;
        $transaction->item_name = $cart_bid->products->product_name;
        $transaction->item_detail = $cart_bid->products->product_description;
        $transaction->price = $cart_bid->bid_price;
        $transaction->transaction_date = $now;
        $transaction->save();

        Cart::where('cart_id', $request->cart_id)->first()->delete();
        return back()->with('checkoutSuccess', 'Payment Success!');

    }
    
    public function show()
    {
        $cart = collect(Cart::all())->where('user_id', auth()->user()->user_id);
        $dt = Carbon::now();
        return view('cart.index', [
            'id' => auth()->user()->user_id,
            'cart' => $cart,
            'title' => 'LAUCT | Shopping Cart',
            'curr_time' => $dt,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy(Request $request)
    {
        Cart::where('cart_id', $request['cart_id'])->delete();
        return back()->with('deleteSuccess', 'The Item Deleted');
    }
}
