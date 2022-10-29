<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produk;
use App\Pesanan;
use App\User;
use App\PesananDetail;
use Auth;
use Alert;
use Carbon\Carbon;

class KeranjangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
    	$produk = Produk::where('id', $id)->first();

    	return view('fitur.pesan_kue.keranjang', compact('produk'));
    }


    public function pesan(Request $request, $id)
    {	
        dd($request);



    
}

}
