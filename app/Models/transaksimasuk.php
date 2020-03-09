<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class transaksimasuk extends Model {

    protected $table = 'transaksimasuk';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'idtransmasuk',
        'iditemlist',
        'tanggal',
        'hargabeli',
        'hargarencana',
        'jumlah'
    ];

    public static function getTransaksiMasuk()
    {
        return self::get();
    }

    public static function getItemlistData()
    {
        return DB::select('SELECT a.iditemlist, b.namabarang, a.tanggal, a.hargabeli, a.hargarencana, SUM(a.jumlah) as jumlah FROM transaksimasuk a, itemlist b
                                WHERE a.iditemlist = b.iditemlist
                                GROUP BY iditemlist');
    }

    public static function addItemlist($parentid, $hargabeli, $hargarencana, $jumlah)
    {
        $itemlist = new transaksimasuk();
        $itemlist->iditemlist = $parentid;
        $itemlist->hargabeli = $hargabeli;
        $itemlist->hargarencana = $hargarencana;
        $itemlist->jumlah = $jumlah;
        $itemlist->save();
    }

}
