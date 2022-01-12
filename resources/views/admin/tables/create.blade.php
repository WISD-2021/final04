@extends('admin.layouts.master')

@section('title', '座位管理')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-10">
        <h1 class="page-header">
            新增座位 <small>請輸入新增的座位內容</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 座位管理
            </li>
            <li>
                <i class="fa fa-edit"></i> 新增座位
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

@include('admin.layouts.partials.validation')

<div class="row">
    <div class="col-lg-10">
        <form action="/admin/tables/store" method="POST" role="form">
            @method('POST')
            @csrf
            <!-- 座位號碼 -->
            <div class="form-group">
                <label for="title">座位號碼：</label>
                <input id="number" name="number" class="form-control" placeholder="請輸入座位號碼">
            </div>
            <!-- 座位狀態 -->
            <div class="form-group">
                <label for="title">類型：</label>
                <select id="status" name="status" class="form-control" >
                    <option value="0">可使用</option>
                    <option value="1">停用</option>
                </select>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-success">新增</button>
            </div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        </form>
    </div>
</div>
<!-- /.row -->
@endsection
