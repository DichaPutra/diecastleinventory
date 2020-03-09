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
        'namabarang'
    ];

    public static function getItemlist()
    {
        return self::get();
    }



}
