@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3 class="panel-title">Material</h3></div>
                <div class="panel-body">
                    <a href="{{route('material.create')}}" class="btn btn-primary"> <i class="fas fa-plus"></i> </a>
                    <div class="table-responsive">  
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">nama project</th>
                                    <th scope="col">tanggal pembelian</th>
      
                                </tr>
                            </thead>
                           @foreach($material as $materials)
                            <tbody>
                                <tr>
                                    <td>{{$materials->id}}</td>
                                    <td><a href="{{route('material.index-two',$materials->id)}}">{{$materials->project}}</a></td>
                                    <td>{{$materials->buying_date}}</td>

                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection