@extends('admin.layouts.master')

@section('title', '餐點管理')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-10">
        <h1 class="page-header">
            餐點管理 <small>所有餐點列表</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 餐點管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row" style="margin-bottom: 20px; text-align: right">
    <div class="col-lg-10">
        <a href="{{ route('admin.items.create') }}" class="btn btn-success">建立新餐點</a>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-10">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th style="text-align: center">#</th>
                        <th style="text-align: center; width:200px;">圖片</th>
                        <th>餐點名稱</th>
                        <th style="text-align: center">售價</th>
                        <th style="text-align: center">類別</th>
                        <th style="text-align: center">功能</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($item as $items)
                    <tr>
                        <td style="text-align: center; line-height:100px;">{{ $items->id }}</td>
                        <td style="text-align: center"><img src="img/{{ $items->image }}" style="height:100px; width:auto;" alt="..." /></td>
                        <td style="line-height:100px;">{{ $items->name }}</td>
                        <td style="text-align: center; line-height:100px;">${{ $items->money }}</td>
                        @foreach($type as $types)
                            @if($items->type_id == $types->id)
                                <td style="text-align: center; line-height:100px;">{{ $types->name }}</td>
                            @endif
                        @endforeach
                        <td style="text-align: center; line-height:100px;">
                            <a class="btn btn-sm btn-primary" href="{{ route('admin.items.edit', $items->id) }}">編輯</a>
                            /
                            <form action="{{ route('admin.items.destroy', $items->id) }}" method="POST" style="display: inline">
                                {{method_field('DELETE')}}
                                {{csrf_field()}}
                                <button class="btn btn-sm btn-danger" type="submit">刪除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
