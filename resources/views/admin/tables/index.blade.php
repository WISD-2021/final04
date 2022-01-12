@extends('admin.layouts.master')

@section('title', '座位管理')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-10">
        <h1 class="page-header">
            座位管理 <small>所有座位列表</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 座位管理
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row" style="margin-bottom: 20px; text-align: right">
    <div class="col-lg-10">
        <a href="{{ route('admin.tables.create') }}" class="btn btn-success">加入新座位</a>
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
                        <th style="text-align: center">座位編號</th>
                        <th style="text-align: center">座位狀態</th>
                        <th style="text-align: center; width:200px;">功能</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($table as $tables)
                    <tr>
                        <td style="text-align: center; line-height:100px;">{{ $tables->id }}</td>
                        <td style="text-align: center; line-height:100px;">{{ $tables->number }}&nbsp;號桌</td>
                        <td style="text-align: center; line-height:100px;">
                            @if($tables->status == 0) 可使用
                            @else 停用
                            @endif
                        </td>
                        <td style="text-align: center; line-height:100px;">
                            <a class="btn btn-sm btn-primary" href="{{ route('admin.tables.edit', $tables->id) }}">編輯</a>
                            /
                            <form action="{{ route('admin.tables.destroy', $tables->id) }}" method="POST" style="display: inline">
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
