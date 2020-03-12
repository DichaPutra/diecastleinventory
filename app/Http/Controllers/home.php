<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\itemlist;
use App\Models\transaksimasuk;
use App\Models\transaksikeluar;
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
        $hargajual = $request->hargajual;
        $jumlah = $request->jumlah;

        itemlist::addItemlist($namabarang, $hargabeli, $hargajual, $jumlah);
        $lastid = itemlist::getLatestID();
        transaksimasuk::addTransaksiMasuk($lastid, $hargabeli, $hargajual, $jumlah);

        $msg = 'Data Item baru telah ditambahkan (new entry)';
        return redirect()->route('home')->with('message', $msg)->withInput();
    }

    public function penambahan(Request $request)
    {
        $iditemlist = $request->iditemlist;
        $hargabeli = $request->hargabeli;
        $hargajual = $request->hargajual;
        $jumlah = $request->jumlah;

        itemlist::updateJumlahStockAdd($iditemlist, $jumlah);
        itemlist::updateHargaTerakhir($iditemlist, $hargabeli,$hargajual);
        transaksimasuk::addTransaksiMasuk($iditemlist, $hargabeli, $hargajual, $jumlah);

        $msg = 'Data Item ditambahkan (penambahan)';
        return redirect()->route('home')->with('message', $msg)->withInput();
    }

    public function penjualan(Request $request)
    {
        $iditemlist = $request->iditemlist;
        $hargabeli = itemlist::getHargaBeliByID($iditemlist);
        $hargapenjualan = $request->hargapenjualan;
        $jumlah = $request->jumlah;
        $jumlahstock = itemlist::getJumlahStockByID($iditemlist);
        $netincome = ($hargapenjualan * $jumlah) - ($hargabeli * $jumlah);
        $jenispembayaran = $request->jenispembayaran;
        
        if ($jumlah > $jumlahstock)
        {
            $msg = 'Jumlah melebih stock yang tersedia';
            return redirect()->route('home')->with('errmessage', $msg)->withInput();
        }
        else
        {
            itemlist::updateJumlahStockReduce($iditemlist, $jumlah);
            transaksikeluar::addTransaksiKeluar($iditemlist, $hargapenjualan, $jumlah, $netincome, $jenispembayaran);
            
            $msg = 'Data Penjualan Item ditambahkan (penjualan)';
            return redirect()->route('home')->with('message', $msg)->withInput();
        }
    }

    public function show()
    {
        return view('welcome');
    }

}
