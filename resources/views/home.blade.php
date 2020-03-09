@extends('layouts.app')

@section('title')
Diecastle Store Inventory
@endsection

@section('head')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
@endsection

@section('content')
<div class="row">

    <div class="col-md-12">
        <div class="content-box-header">
            <div class="panel-title">Control</div>
        </div>
        <div class="content-box-large box-with-header">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="card mt-3 tab-card">
                            <div class="card-header tab-card-header">
                                <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">New Entry</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Penambahan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">Penjualan</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
                                    <form method="post" action="{{route('postItemList')}}" style="margin-top: 10px;">
                                        {{ csrf_field() }}
                                        <div class="row-fluid">
                                            <div class="form-group">
                                                <label>Nama Barang</label>
                                                <input name="namabarang" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Harga Beli</label>
                                                <input name="hargabeli" type="number" class="form-control">
                                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                            </div>
                                            <div class="form-group">
                                                <label>Rencana Harga Jual</label>
                                                <input name="hargarencana" type="number" class="form-control">
                                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Stock Pembelian</label>
                                                <input name="jumlah" type="number" class="form-control">
                                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                            </div>
                                            <input type="submit" value="Add" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                                    <form method="post" action="#" style="margin-top: -317px;">
                                        {{ csrf_field() }}
                                        <div class="row-fluid">
                                            <div class="form-group">
                                                <label>Nama Barang</label>
                                                <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
                                                    @foreach($itemlist as $item)
                                                    <option data-subtext="{{$item->iditemlist}}">{{$item->namabarang}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Harga Beli</label>
                                                <input type="number" class="form-control">
                                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                            </div>
                                            <div class="form-group">
                                                <label>Rencana Harga Jual</label>
                                                <input type="number" class="form-control">
                                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Stock Pembelian</label>
                                                <input type="number" class="form-control">
                                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                            </div>
                                            <input type="submit" value="Add" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
                                    <form method="post" action="#" style="margin-top: -317px;">
                                        {{ csrf_field() }}
                                        <div class="row-fluid">
                                            <div class="form-group">
                                                <label>Nama Barang</label>
                                                <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
                                                    @foreach($itemlist as $item)
                                                    <option data-subtext="{{$item->iditemlist}}">{{$item->namabarang}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Harga Penjualan</label>
                                                <input type="number" class="form-control">
                                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah</label>
                                                <input type="number" class="form-control">
                                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Pembayaran</label>
                                                <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
                                                    <option data-subtext="Direct">Direct</option>
                                                    <option data-subtext="Tokopedia">Tokopedia</option>
                                                </select>
                                            </div>
                                            <input type="submit" value="Sold" class="btn btn-primary">
                                        </div>
                                    </form>             
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="content-box-header">
            <div class="panel-title text-center">Item List</div>
        </div>
        <div class="content-box-large box-with-header">
            <div class="container">
                <table class="table table-striped table-bordered" id="itemlist" name="itemlist">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual Rencana</th>
                            <th>Stock Available</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($itemlist as $item)
                        <tr class="odd gradeX">
                            <td>{{$item->namabarang}}</td>
                            <td>{{$item->hargabeli}}</td>
                            <td>{{$item->hargarencana}}</td>
                            <td class="center">{{$item->jumlahstock}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>    
        </div>      
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function () {
        $('#itemlist').DataTable({
            "bLengthChange": false,
            "lengthChange": false
        });
    });
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
@endsection
