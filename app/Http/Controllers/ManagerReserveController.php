<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Table;
use App\Models\Reserve;
use Illuminate\Http\Request;

class ManagerReserveController extends Controller
{
    public function index()
    {
        $reserves=Reserve::orderBy('id', 'DESC')->get();
        $data=['reserve'=>$reserves];

        $members=Member::orderBy('id', 'ASC')->get();
        $datamember=['member'=>$members];

        $users=User::orderBy('id', 'ASC')->get();
        $datauser=['user'=>$users];

        $tables=Table::orderBy('id', 'ASC')->get();
        $datatable=['table'=>$tables];
        return view('admin.reserves.index', $data, $datamember, $datauser, $datatable);
    }
}
