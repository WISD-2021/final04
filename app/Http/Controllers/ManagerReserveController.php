<?php

namespace App\Http\Controllers;

use App\Models\Table;
use App\Models\Reserve;
use Illuminate\Http\Request;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ManagerReserveController extends Controller
{
    public function index()
    {
        $reserves=Reserve::orderBy('id', 'DESC')->get();
        $data=['reserve'=>$reserves];


        $tables=Table::orderBy('id', 'ASC')->get();
        $datatable=['table'=>$tables];
        return view('admin.reserves.index', $data, $datatable);
    }

    public function edit($id)
    {
        $reserves=Reserve::find($id);
        $data=['reserve'=>$reserves];

        $tables=Table::orderBy('id', 'ASC')->get();
        $datatable=['table'=>$tables];
        return view('admin.reserves.edit', $data, $datatable);
    }

    public function update(Request $request, $id)
    {
        $reserves=Reserve::find($id);
        $reserves->update($request->all());
        return redirect()->route('admin.reserves.index');
    }

    public function destroy($id)
    {
        Reserve::destroy($id);
        return redirect()->route('admin.reserves.index');
    }
}
