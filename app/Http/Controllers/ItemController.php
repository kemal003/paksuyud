<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(){
        $kt_bawang = Item::select('*')->where('category' ,'=', 'Tempe Kripik Bawang')->get();
        $kt_daunjeruk = Item::select('*')->where('category' ,'=', 'Tempe Kripik Daun Jeruk')->get();
        $others = Item::select('*')->where('category' ,'!=', 'Tempe Kripik Daun Jeruk', 'and')->where('category' ,'!=', 'Tempe Kripik Bawang')->get();
        return view('index')->with('kt_bawang', $kt_bawang)->with('kt_daunjeruk', $kt_daunjeruk)->with('others', $others);
    }

    public function showItem(){
        $items = Item::all();
        return view('dashboard', ['items'=>$items]);
    }

    public function inputItem(){
        return view('inputItem');
    }
}
