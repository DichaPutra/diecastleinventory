<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\itemlist;
use App\Models\transaksimasuk;
use Illuminate\Http\Request;

class home extends Controller {

    public function index()
    {
        $itemlist = itemlist::getItemlist();


        return view('home', compact('itemlist'));
    }

    public function postItemList(Request $request)
    {
        $namabarang = $request->namabarang;
        $hargabeli = $request->hargabeli;
        $hargajual = $request->hargabeli;
        $jumlah = $request->jumlah;

        itemlist::addItemlist($namabarang, $hargabeli, $hargajual, $jumlah);
        $lastid = itemlist::getLatestID();
        transaksimasuk::addItemlist($lastid,$hargabeli, $hargajual, $jumlah);

        $msg = 'Data Item baru telah ditambahkan (new entry)';
        return redirect()->route('home')->with('message', $msg)->withInput();
    }

    public function show()
    {
        return view('welcome');
    }

}
