<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class transaksikeluar extends Model {

    protected $table = 'transaksikeluar';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'idtranskeluar',
        'iditemlist',
        'tanggal',
        'hargapenjualan',
        'jumlah',
        'netincome',
        'jenispembayaran'
    ];

    public static function getTransaksiKeluar()
    {
        return self::get();
    }

    public static function addTransaksiKeluar($iditemlist, $hargapenjualan, $jumlah, $netincome, $jenispembayaran)
    {
        $itemlist = new transaksikeluar();
        $itemlist->iditemlist = $iditemlist;
        $itemlist->hargapenjualan = $hargapenjualan;
        $itemlist->jumlah = $jumlah;
        $itemlist->netincome = $netincome;
        $itemlist->jenispembayaran = $jenispembayaran;
        $itemlist->save();
    }

}
