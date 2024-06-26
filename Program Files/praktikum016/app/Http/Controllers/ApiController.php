<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ApiController extends Controller
{

    public function index()
    {
        $numbers = range(1, 16); // membuat array berisi angka 1 sampai 16
        return response()->json($numbers);
    }

    public function getProduct()
    {
        $data = Produk::all();
        return response()->json($data);
    }
}
