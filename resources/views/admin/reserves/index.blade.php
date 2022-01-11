@extends('admin.layouts.master')

@section('title', '預約管理')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-10">
        <h1 class="page-header">
            預約管理 <small>所有預約列表</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-edit"></i> 預約管理
            </li>
        </ol>
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
                        <th style="text-align: center">預約人</th>
                        <th style="text-align: center">桌號</th>
                        <th style="text-align: center">人數</th>
                        <th style="text-align: center">時間</th>
                        <th style="text-align: center; width:200px;">功能</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($reserve as $reserves)
                    <tr>
                        <td style="text-align: center; line-height:100px;">{{ $reserves->id }}</td>
                        <td style="text-align: center; line-height:100px;">{{ $reserves->name }}</td>
                        @foreach($table as $tables)
                            @if($reserves->table_id == $tables->id)
                                <td style="text-align: center; line-height:100px;">{{ $tables->number }}桌</td>
                            @endif
                        @endforeach
                        <td style="text-align: center; line-height:100px;">{{ $reserves->person }}</td>
                        <td style="text-align: center; line-height:100px;">{{ $reserves->date }}</td>

                        <td style="text-align: center; line-height:100px;">
                            <a class="btn btn-sm btn-primary" href="{{ route('admin.reserves.edit', $reserves->id) }}">編輯</a>
                            /
                            <form action="{{ route('admin.reserves.destroy', $reserves->id) }}" method="POST" style="display: inline">
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
