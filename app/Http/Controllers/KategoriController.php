<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{

    public function index()
    {
        $data = Kategori::all('CategoryID', 'CategoryName')->toArray();
        return view('pages.index', compact('data'));
    }
}
