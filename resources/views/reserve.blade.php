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

	<form action="/reserve" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        @method('POST')
        @csrf

        <!-- 訂位名稱 -->
        <section class="py-5">
        <br><br>
        <center>
            <div class="form-group" style="text-center">
                <label for="reserve-name" class="col-sm-3 control-label">姓名</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="reserve-name" value="" >
                </div>
            </div>

            <div class="form-group">
                <label for="reserve-person" class="col-sm-3 control-label">人數</label>

                <div class="col-sm-6">
                    <input type="text"  id="person"name="person" value="">
                </div>

                <div class="form-group">
                <label for="reserve-table_id" class="col-sm-3 control-label">桌號</label>

                <div class="col-sm-6">
                    <input type="text"  id="table_id"name="table_id" value="">
                </div>
                
                <div class="form-group">
                <label for="reserve-date" class="col-sm-3 control-label">日期</label>

                <div class="col-sm-6">
                    <input type="date"  id="date"name="date" class="col-sm-5 control-label" value="">
                </div>
                
            </div>
            <br>
            <!-- 確認訂位按鈕-->

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                        <a class="btn btn-outline-dark mt-auto" href="{{route('reserve.store')}}">確認預約</a>
                </div>
            </div>
        </form>
    </div>
    </center>
    </section>
@endsection