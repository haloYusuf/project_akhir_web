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
}
