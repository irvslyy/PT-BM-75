@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3 class="panel-title">inventaris</h3></div>
                <div class="panel-body">

                <div class="row">
                    <div class="col-md-6">
                        <a href=" {{route('inventorycreate')}} " class="btn btn-primary">tambah stock</a>
                        <a href="{{route('export')}}" class="btn btn-warning">export stock</a>
                    </div>
                    <div class="col-md-6">
                     <input class="typeahead form-control" type="text" placeholder="cari....">
                    </div>
                </div>

                   <table class="table table-responsive data-table">
                        <thead>
                            <tr>
                                <th scope="col">no</th>
                                <th scope="col">kode stock</th>
                                <th scope="col">nama stock</th>
                                <th scope="col">jumlah stock</th>
                                <th scope="col">keterangan stock</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        @foreach($inventory as $inventorys)
                        <tbody>
                            <tr>
                                <th scope="col"> {{$inventorys->id}} </th>
                                <td> {{$inventorys->stock_code}} </td>
                                <td> {{$inventorys->stock_name}} </td>
                                <td> {{$inventorys->stock_qty}} </td>
                                <td> {{$inventorys->stock_ket}} </td>
                                <td>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <a href="{{route('inventory.edit',$inventorys->id)}}" class="btn btn-primary">edit</a>
                                        </div>
                                        <div class="col-xs-3">
                                            <form action="{{route('inventorydelete',$inventorys->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    {{$inventory->links()}}
                </div>
            </div>
        </div>
    </div>
</div>









@endsection