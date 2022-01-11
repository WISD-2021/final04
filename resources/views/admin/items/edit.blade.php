@extends('admin.layouts.master')

@section('title', '餐點管理')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-10">
        <h1 class="page-header">
            編輯餐點 <small>編輯餐點內容</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 餐點管理
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
        <form action="/admin/items/{{$item->id}}" method="POST" role="form">
            @method('PATCH')
            @csrf
            <!-- 名稱 -->
            <div class="form-group">
                <label for="title">餐點名稱：</label>
                <input id="name" name="name" class="form-control" placeholder="請輸入餐點名稱" value="{{old('name',$item->name)}}">
            </div>
            <!-- 類型 -->
            <div class="form-group">
                <label for="type_id">類型：</label>
                <select id="type_id" name="type_id" class="form-control" >
                    @foreach($type as $types)
                        <option @if($item->type_id == $types->id) selected="selected" @endif value="{{ $types->id }}">{{ $types->name }}</option>
                    @endforeach
                </select>
            </div>
            <!-- 金額 -->
            <div class="form-group">
                <label for="money">金額：</label>
                <input id="money" name="money" class="form-control" placeholder="請輸入金額" value="{{old('money',$item->money)}}">
            </div>
            <!-- 圖片 -->
            <div class="form-group">
                <label for="image">圖片檔名+副檔名(檔案請放置於 public/assets/img/)：</label>
                <input id="image" name="image" class="form-control" placeholder="請輸入圖片檔名" value="{{old('image',$item->image)}}">
            </div>
            <!-- 狀態 -->
            <input type="hidden" id="status" name="status" value="0" class="form-control" placeholder="請輸入狀態" value="{{old('status',$item->status)}}">


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
