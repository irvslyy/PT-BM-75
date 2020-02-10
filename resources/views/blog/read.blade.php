@extends('layouts.app')

@section('content')



<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3 class="panel-title">Blog</h3></div>
                <div class="panel-body">
                <a href="" class="btn btn-primary">create post now</a>
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">TITLE</th>
                                <th scope="col">DESC</th>
                                <th scope="col">IMAGE</th>
                                <th scope="col">HANDLE</th>
                            </tr>
                        </thead>
                        @foreach($blog as $blogs)
                        <tbody>
                            <tr>
                                <th scope="row">{{$blogs->id}}</th>
                                <td> {{$blogs->TITLE}} </td>
                                <td> {{$blogs->DESC}} </td>
                                <td> {{$blogs->IMAGE}} </td>
                                <td>
                                 <a href="" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                                 <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>    
</div>


@endsection