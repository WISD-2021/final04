@extends('admin.layouts.master')

@section('title', '預約管理')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-10">
        <h1 class="page-header">
            編輯餐點 <small>編輯餐點內容</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 預約管理
            </li>
            <li>
                <i class="fa fa-edit"></i> 編輯餐點
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

@include('admin.layouts.partials.validation')

<div class="row">
    <div class="col-lg-10">
        <form action="/admin/reserves/{{$reserve->id}}" method="POST" role="form">
            @method('PATCH')
            @csrf
            <!-- 名稱 -->
            <div class="form-group">
                <label for="title">預約會員編號：</label>
                <input id="member_id" name="member_id" class="form-control" placeholder="請輸入預約會員編號" value="{{old('member_id',$reserve->member_id)}}">
            </div>
            <!-- 預約人 -->
            <div class="form-group">
                <label for="title">預約人姓名：</label>
                <input id="name" name="name" class="form-control" placeholder="請輸入預約人姓名" value="{{old('name',$reserve->name)}}">
            </div>
            <!-- 人數 -->
            <div class="form-group">
                <label for="title">人數：</label>
                <input id="person" name="person" class="form-control" placeholder="請輸入人數" value="{{old('person',$reserve->person)}}">
            </div>
            <!-- 桌號 -->
            <div class="form-group">
                <label for="title">桌號：</label>
                <select id="table_id" name="table_id" class="form-control" >
                    @foreach($table as $tables)
                        @if($tables->status != 1)
                            <option @if($reserve->table_id == $tables->id) selected="selected" @endif value="{{ $tables->id }}">{{ $tables->number }}桌</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <!-- 日期 -->
            <div class="form-group">
                <label for="title">日期：</label>
                <input type="date" id="date" name="date" class="form-control" placeholder="請選擇日期" value="{{old('date',$reserve->date)}}">
            </div>
            <div class="text-right">
            <button type="submit" class="btn btn-success">更新</button>
        </div>

        </form>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

    </div>
</div>
<!-- /.row -->
@endsection
