@extends('layouts.app')

@section('title')
Diecastle Store Inventory
@endsection

@section('head')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
@endsection

@section('content')
<div class="row">

    <div class="col-md-12">
        <div class="content-box-header">
            <div class="panel-title text-center">   </div>
        </div>
        <div class="content-box-large box-with-header">
            <div class="container">
                <div class="col-md-12">
                    @if(session()->has('message'))
                    <div class="alert alert-success" id="success-alert">
                        {{ session()->get('message') }}
                    </div>
                    @endif

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newentry">
                        New Entry
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#penambahan">
                        Penambahan
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#penjualan">
                        Penjualan
                    </button><br><br><br>

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

    <!-- ============ modal new entry ====================== --> 


    <div class="modal fade" id="newentry" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="post" action="{{route('postItemList')}}">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><b>New Entry</b></h5>
                    </div>
                    <div class="modal-body">
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
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" value="Add" class="btn btn-primary">
                    </div>
                </form> 
            </div>
        </div>
    </div>

    <div class="modal fade" id="penambahan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="post" action="{{route('penambahan')}}">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><b>Penambahan</b></h5>
                    </div>
                    <div class="modal-body">
                        {{ csrf_field() }}
                        <div class="row-fluid">
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <select class="form-control selectpicker" data-show-subtext="false" data-live-search="true" name="iditemlist" id="iditemlist">
                                    @foreach($itemlist as $item)
                                    <option data-subtext="" value="{{$item->iditemlist}}">{{$item->namabarang}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Harga Beli</label>
                                <input type="number" class="form-control" name="hargabeli">
                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                            </div>
                            <div class="form-group">
                                <label>Rencana Harga Jual</label>
                                <input type="number" class="form-control" name="hargajual">
                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                            </div>
                            <div class="form-group">
                                <label>Jumlah Stock Pembelian</label>
                                <input type="number" class="form-control" name="jumlah">
                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                            </div>
                            <input type="submit" value="Add" class="btn btn-primary">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" value="Add" class="btn btn-primary">
                    </div>
                </form> 
            </div>
        </div>
    </div>

    <div class="modal fade" id="penjualan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="post" action="#">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><b>Penjualan</b></h5>
                    </div>
                    <div class="modal-body">
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" value="Add" class="btn btn-primary">
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<script>
    $(document).ready(function () {
        $('#itemlist').DataTable({
            "bLengthChange": false,
            "lengthChange": false
        });
    });

    $(function () {
        $('.selectpicker').selectpicker();
    });

    $("#success-alert").fadeTo(2000, 500).slideUp(500, function () {
        $("#success-alert").slideUp(500);
    });
</script>
@endsection
