@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><div class="panel-title"><h3>edit barang</h3></div></div>
                <div class="panel-body">
              
                <form action="{{route('inventory.update',$inventory->id)}}" method="POST">
                    @csrf
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">kode stok</label>
                            <input type="text" class="form-control" name="stock_code" placeholder="kode stok" value=" {{$inventory->stock_code}} ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">nama barang</label>
                            <input type="text" class="form-control" name="stock_name" placeholder="nama barang" value=" {{$inventory->stock_name}} ">
                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">jumlah stok</label>
                            <input type="text" class="form-control" name="stock_qty" placeholder="jumlah stok" value=" {{$inventory->stock_qty}} ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">keterangan stok</label>
                            <input type="text" class="form-control" name="stock_ket" placeholder="keterangan stok" value=" {{$inventory->stock_ket}} ">
                        </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">update</button>
                </form>
                
                </div>
            </div>
        </div>
    </div>
</div>



@endsection