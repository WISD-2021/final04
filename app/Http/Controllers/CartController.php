<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Item;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = Auth::user()->id;
        $carts = DB::table('carts')
            ->join('items', 'carts.item_id', '=', 'item.id')
            ->where('carts.user_id', $name)
            ->select('carts.id', 'items.name', 'items.money','items.image')
            ->get();
        ['carts'=>$carts];
        $total=0;
        foreach ($carts as $cart)
        {
            $total = ($cart->price)+$total;
        }
        #dd($total);
        $data=['carts'=>$carts,'total'=>$total];
        return view('cart.index',$data);
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
     * @param  \App\Http\Requests\StoreCartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartRequest $request)
    {
        Cart::create($request->all());
        return redirect()->route('item')->with('status','系統提示：餐點已加入購物車');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCartRequest  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart,$id)
    {
        Cart::destroy($id);
        return redirect()->route('cart.index');
    }

    public function checkout()
    {
        $user=Auth::user();

        /** @var TYPE_NAME $name */
        $name=Auth::user()->name;
        $id=Auth::user()->id;
        $carts = DB::table('carts')
            ->join('items', 'carts.item_id', '=', 'item.id')
            ->where('carts.user_id', $id)
            ->select('carts.id','items.name', 'items.money','items.image')
            ->get();

        ['carts'=>$carts];

        $total=0;

        foreach ($carts as $cart)
        {
            $total = ($cart->price)+$total;
        }

        $data=['name'=>$name,'carts'=>$carts,'total'=>$total,'user'=>$user,'id'=>$id];
        return view('cart.checkout',$data);
    }
    public function end()
    {
        $name=Auth::user()->id;

        #dd($carts);

        Order::create([
            'user_id'=>$name,
            'date'=>Carbon::now(),
            'status'=>'未完成',
            'sum'=>0,
        ]);

        $order_id=DB::table('orders')
            ->where('user_id',$name)
            ->orderBy('created_at','desc')
            ->select('id')
            ->first();

        $carts=DB::table('carts')
            ->join('items','carts.item_id','=','item.id')
            ->select('items.id','items.money')
            ->where('carts.user_id',$name)
            ->get();

        ['carts'=>$carts];
        $total=0;
        foreach ($carts as $cart)
        {
            Checkout_detail::create([
                'order_id'=>$order_id->id,
                'item_id'=>$cart->id,
                'total'=>$cart->money,
            ]);
            $total = ($cart->money)+$total;
        }
        Cart::where('user_id',$name)->delete();
        Order::where('id',$order_id->id)->update(['total' =>$total]);

        return redirect()->route('order')->with('status','系統提示：訂單已送出！');
}
}
