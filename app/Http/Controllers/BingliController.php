<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BingliBigs;
use App\Models\BingliMids;
use App\Models\BingliSmalls;
use App\Models\BingliDetail;

class BingliController extends Controller
{
    //
    public function getAll() {
        $bigs = BingliBigs::all();
        $mids = BingliMids::all();

        return view('pages.bingli', [
            'bingliBigs' => $bigs,
            'bingliMids' => $mids
        ]);
    }

    public function getList($type_num) {
        $res = BingliSmalls::where('father_type_num', $type_num)
            ->get();

        return view('pages.binglier', ['bingliSmalls' => $res]);

    }

    public function getDetail($id) {
        $res = BingliDetail::findOrFail($id);
        return view('pages.bingliDetail', ['bingliDetail' => $res]);
    }
}
