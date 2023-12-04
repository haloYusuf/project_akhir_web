<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index($id)
    {
        $data = Produk::where('CategoryID', $id)->get(['ProductID', 'ProductName', 'UnitPrice'])->toArray();
        return view('pages.produk', compact('data'));
    }

    public function detail($id)
    {
        $data = Produk::where('ProductID', $id)->first()->toArray();
        return view('pages.detail', compact('data'));
    }

    public function submit(Request $request)
    {
        $nama = $request->input('nama');
        $qty = $request->input('qty');
        $total = $request->input('qty') * $request->input('price');
        $data = ['name' => $nama, 'qty' => $qty, 'total' => $total];
        session()->push('data', $data);
        return redirect("/shoppingCart");
    }

    public function shoppingCart()
    {
        if(session()->exists('data')){
            session()->put('total', 0);
            foreach(session()->get('data') as $v){
                session()->put('total', session()->get('total') + $v['total']);
            }
        }
        return view('pages.cart');
    }
}
