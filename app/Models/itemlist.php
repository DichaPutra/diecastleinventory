<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class itemlist extends Model {

    protected $table = 'itemlist';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'iditemlist',
        'namabarang',
        'hargabeli',
        'hargarencana',
        'jumlahstock'
    ];

    public static function getItemlist()
    {
        return self::get();
    }

    public static function addItemlist($namabarang, $hargabeli, $hargarencana, $jumlah)
    {
        $itemlist = new itemlist();
        $itemlist->namabarang = $namabarang;
        $itemlist->hargabeli = $hargabeli;
        $itemlist->hargarencana = $hargarencana;
        $itemlist->jumlahstock = $jumlah;
        $itemlist->save();
    }

    public static function getLatestID()
    {

        return self::latest('iditemlist')->first()->iditemlist;
    }

    public static function getJumlahStockByID($iditemlist)
    {
        return self::where('iditemlist', $iditemlist)->first()->jumlahstock;
    }

    public static function getHargaBeliByID($iditemlist)
    {
        return self::where('iditemlist', $iditemlist)->first()->hargabeli;
    }

    public static function updateJumlahStockAdd($iditemlist, $penambahan)
    {
        $jumlahsebelum = self::where('iditemlist', $iditemlist)->first()->jumlahstock;
        $jumlahupdated = $jumlahsebelum + $penambahan;
        self::where('iditemlist', $iditemlist)->update(['jumlahstock' => $jumlahupdated]);
    }

    public static function updateJumlahStockReduce($iditemlist, $pengurangan)
    {
        $jumlahsebelum = self::where('iditemlist', $iditemlist)->first()->jumlahstock;
        $jumlahupdated = $jumlahsebelum - $pengurangan;
        self::where('iditemlist', $iditemlist)->update(['jumlahstock' => $jumlahupdated]);
    }

    public static function updateHargaTerakhir($iditemlist, $hargabeli,$hargajual)
    {
        self::where('iditemlist', $iditemlist)->update(['hargabeli' => $hargabeli,'hargajual' => $hargajual]);
    }

}
