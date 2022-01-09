<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\request;

class OrderController extends Controller
{
    public function order()
    {
        //
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    public function  add($id) 
    {
        $addOK=0; //避免重複的商品
        if(\Illuminate\Support\Facades\Auth::check())
        {
            $data = DB::table('orders')->get();
            foreach ($data as $dates)
            {
                if($dates->user_id==auth()->user()->id)
                    $addOK=1;
            }

            if ($addOK==0){
                DB::table('orders')->insert(
                    [
                        'id' =>auth()->member()->id,
                        'member_id'=>auth()->user()->id,
                        'method' =>"現金",
                        'total' =>'350',
                        'status'=>'1'
                    ]
                );
                echo "<script>alert('已加入訂單'); location.href ='../';</script>";
            }
            else if($addOK==1) {
                //  "<script>alert('已存在該商品'); location.href ='../';</script>"; 這種跳轉才會有訊息，但不知為何在這怪怪的
                return redirect()->route('/');//先以不跳訊息的方式呈現
            }
        }
        else
        {
            echo "<script >alert('尚未登入')</script>";
            return redirect()->route('login');

        }

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function delete($id)
    { //先自行設定delete方法
        if(\Illuminate\Support\Facades\Auth::check())
        {

            Car::destroy($id);
            return redirect()->route('order');

        }
        else
        {
            return redirect()->route('login');
        }
    }

}
