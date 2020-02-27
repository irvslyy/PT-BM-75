@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3 class="panel-title">Material</h3></div>
                <div class="panel-body">
                <a href="{{route('material.index')}}" class="btn btn-warning"> <i class="fas fa-arrow-left"></i> </a>
                <a href="{{route('export.pembelian')}}" class="btn btn-primary"> <i class="fas fa-download"></i> </a>
                <br><br>
                <form action="{{route('import.pembelian')}}" method="POST">
                    @csrf
                   <input type="file" name="file" class="form-control">
                </form><br>

                    <div class="table-responsive">  
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">nama project</th>
                                    <th scope="col">toko pembelian</th>
                                    <th scope="col">nama barang</th>
                                    <th scope="col">tangal pembelian</th>
                                    <th scope="col">harga</th>
                                    <th scope="col">material_id</th>
                                    <th scope="col">dibuat</th>
                                    <th scope="col">handle</th>
                                </tr>
                            </thead>
                        
                          @foreach($material as $materials)
                            <tbody>
                                <tr>
                                   <td>{{$materials->id}}</td>
                                   <td>{{$materials->project}}</td>
                                   <td>{{$materials->toko_name}}</td>
                                   <td>{{$materials->goods_name}}</td>
                                   <td>{{$materials->buying_date}}</td>
                                   <td>{{$materials->price}}</td>
                                   <td>{{$materials->material_id}}</td>
                                   <td>{{$materials->created_at}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <a href="" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                                            </div>
                                            <div class="col-md-5">
                                                <form action="" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                           @endforeach
                       
                        </table>
                    </div>
                </div>
                <div class="panel-footer">
                    <h3 class="panel-title">Jumlah Harga : </h3>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection