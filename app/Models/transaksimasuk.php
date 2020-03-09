<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class transaksimasuk extends Model {

    protected $table = 'transaksikeluar';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'idtransmasuk',
        'iditemlist',
        'tanggal',
        'hargabeli',
        'rencanahargajual',
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

}
