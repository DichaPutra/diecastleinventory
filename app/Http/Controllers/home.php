<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\itemlist;
use App\Models\transaksimasuk;

class home extends Controller {

    public function index()
    {
        $itemlist = itemlist::getItemlist();
//        $itemlist = itemlist::getItemlistData();
//        $datautama = transaksimasuk::getItemlistData();


        return view('home', compact('itemlist'));
    }

    public function postItemList(Request $request)
    {
        return $request;
    }

    public function show()
    {
        return view('welcome');
    }

}
