@extends('layouts.master')
@section('content')
            <!-- Page Header-->
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                    </div>
                </div>
            </div>
        </div>
    </header>
    
            <!-- Main Content -->
            <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mx-auto">

                @csrf
                @if(count($orders)>0)

                    @if(session()->has('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <br><br>
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th width="15%" style="text-align: center">訂單編號</th>
                            <th width="20%" style="text-align: center">付款方式</th>
                            <th width="25%" style="text-align: center">總金額</th>
                            <th width="25%" style="text-align: center">訂單狀態</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)

                            <tr>
                                <td style="text-align: center">
                                    {{$order->id}}
                                </td>
                                <td style="text-align: center">
                                    {{$order->method}}<br>
                                </td>
                                <td style="text-align: center">
                                    {{($order->total)}}
                                </td>
                                <td style="text-align: center">
                                    {{($order->status)}}
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>

                @else
                    <div style="text-align: center">
                        <div class="title-box">
                            <h2>您尚未訂購過任何商品</h2>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <br><br><br><br><br>
@endsection