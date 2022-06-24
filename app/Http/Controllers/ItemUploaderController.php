<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB as DB;

class ItemUploaderController extends Controller
{
    //
    public function itemsUploadPost(Request $request)
    {
        $name = $request->get('inputNama');
        $price = $request->get('inputHarga');
        $desc = $request->get('inputDesc');
        $category = $request->get('inputCategory');


        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $img_url = time().'.'.$request->image->extension();  
     
        $request->image->storeAs('public/images', $img_url);

        /* Store $imageName name in DATABASE from HERE */
        $data = array(
            'name'=>$name,
            'img_url'=>$img_url,
            'price'=>$price,
            'category'=>$category,
            'available'=>1,
            'desc'=>$desc,
        );
        DB::table('items')->insert($data);

        return back()
            ->with('success','Item telah terupload!')
            ->with('image',$img_url); 
    }
}
