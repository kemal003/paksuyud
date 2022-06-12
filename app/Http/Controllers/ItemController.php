<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index() {
        $kt_bawang = Item::select('*')->where('category' ,'=', 'Tempe Kripik Bawang')->get();
        $kt_daunjeruk = Item::select('*')->where('category' ,'=', 'Tempe Kripik Daun Jeruk')->get();
        return view('index')->with('kt_bawang', $kt_bawang)->with('kt_daunjeruk', $kt_daunjeruk);
    }
}
