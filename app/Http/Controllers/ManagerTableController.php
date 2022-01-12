<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ManagerTableController extends Controller
{
    public function index()
    {
        $tables=Table::orderBy('id', 'ASC')->get();
        $data=['table'=>$tables];
        return view('admin.tables.index', $data);
    }

    public function create()
    {
        return view('admin.tables.create');
    }

    public function store(Request $request)
    {
        Table::create($request->all());
        return redirect()->route('admin.tables.index');
    }

    public function edit($id)
    {
        $tables=Table::find($id);
        $data=['table'=>$tables];
        return view('admin.tables.edit', $data);

    }

    public function update(Request $request, $id)
    {
        $tables=Table::find($id);
        $tables->update($request->all());
        return redirect()->route('admin.tables.index');
    }

    public function destroy($id)
    {
        Table::destroy($id);
        return redirect()->route('admin.tables.index');
    }
}
