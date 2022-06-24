<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use PhpParser\Node\Expr\AssignOp\Concat;

use function Psy\debug;

class ItemController extends Controller
{
    public function index()
    {
        $kt_bawang = Item::select('*')->where('category', '=', 'Tempe Kripik Bawang')->get();
        $kt_daunjeruk = Item::select('*')->where('category', '=', 'Tempe Kripik Daun Jeruk')->get();
        $others = Item::select('*')->where('category', '!=', 'Tempe Kripik Daun Jeruk', 'and')->where('category', '!=', 'Tempe Kripik Bawang')->get();
        return view('index')->with('kt_bawang', $kt_bawang)->with('kt_daunjeruk', $kt_daunjeruk)->with('others', $others);
    }

    public function orderForm()
    {
        $items = Item::all();
        return view('orderForm')->with('items', $items);
    }

    function debugThis($data)
    {
        $output = $data;
        if (is_array($output)) {
            $output = implode(',', $output);
        }
        echo "<script>console.log('" . $output . "')</script>";
    }

    public function processForm(Request $request)
    {
        $items = Item::all();
        $ordered = [];
        foreach ($items as $item) {
            if ($request[$item->id] != 0) {
                array_push($ordered, $item->id, $item->price, $request[$item->id]);
            }
        }
        $name = $request['name'];
        $phone = $request['phone'];
        $address = $request['address'];
        $orders = "";
        $total = 0;

        for ($i = 0; $i < count($ordered); $i = $i + 3) {
            $itemName = Item::where('id', $ordered[$i])->value('name');
            //ItemController::debugThis($itemName);
            $orders = $orders . $itemName . PHP_EOL;
            $total = $total += ($ordered[$i + 2] * $ordered[$i + 1]);
        }

        $total = strval($total);
        $orderString =  "Nama    : " . $name . PHP_EOL.
                        "Kontak  : " . $phone . PHP_EOL.
                        "alamat  : " . $address . PHP_EOL. PHP_EOL .
                        "Pesanan : " . PHP_EOL . $orders . PHP_EOL .
                        "Total   : Rp." . $total;

        $orderString = urlencode($orderString);
        
        echo '<script>window.open("https://wa.me/6287755333890?text='.$orderString.'");</script>';
        echo '<script>alert("Terima kasih atas pemesanan anda. Mohon tunggu konfirmasi melalui Whatsapp")</script>';
        return ItemController::index();
    }

    public function showItem()
    {
        $items = Item::all();
        return view('dashboard', ['items' => $items]);
    }

    public function inputItem()
    {
        return view('inputItem');
    }
}
