<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ManagerItemController extends Controller
{
    public function index()
    {
        $items=Item::orderBy('id', 'DESC')->get();
        $data=['item'=>$items];
        $types=Type::orderBy('id', 'ASC')->get();
        $datatype=['type'=>$types];
        return view('admin.items.index', $data, $datatype);
    }

    public function create()
    {
        $types=Type::orderBy('id', 'ASC')->get();
        $datatype=['type'=>$types];
        return view('admin.items.create', $datatype);
    }

    public function store(Request $request)
    {
        Item::create($request->all());
        return redirect()->route('admin.items.index');
    }

    public function edit($id)
    {
         $types=Type::orderBy('id', 'ASC')->get();
         $datatype=['type'=>$types];

         $items = Item::find($id);
         $data=['item'=>$items];
         return view('admin.items.edit', $data, $datatype);
    }

    public function update(Request $request, $id)
    {
        $items=Item::find($id);
        $items->update($request->all());
        return redirect()->route('admin.items.index');
    }

    public function destroy($id)
    {
        Item::destroy($id);
        return redirect()->route('admin.items.index');
    }
}
