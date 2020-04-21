<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BingliBigs;
use App\Models\BingliMids;
use App\Models\BingliSmalls;
use App\Models\BingliDetails;
use Illuminate\Support\Facades\Log;

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

    public function getList($id) {
        $res = BingliMids::find($id)
            ->getSmalls()
            ->get();

        return view('pages.binglier', ['bingliSmalls' => $res]);

    }

    public function getDetailList($id) {

        $res = BingliSmalls::find($id)
            ->getDetails()
            ->get();

        return view('pages.bingliList', ['bingliList' => $res]);
    }

    public function getDetail($id) {
        $res = BingliDetails::findOrFail($id);
        return view('pages.bingliDetail', ['bingliDetail' => $res]);
    }
}
