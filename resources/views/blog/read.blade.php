@extends('layouts.app')

@section('content')



<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3 class="panel-title">Blog</h3></div>
                <div class="panel-body">
                <a href="{{route('blog.create')}}" class="btn btn-primary">create post now</a>
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
                                <td> {!!str_limit($blogs->TITLE,20)!!} </td>
                                <td> {!! str_limit($blogs->DESC,50) !!} </td>
                                <td> <img src="{{asset('/thumbnail/'. $blogs->IMAGE)}}" alt="s" width="15%"> </td>
                                <td>
                                 <div class="row">
                                    <div class="col-md-5">
                                        <a href="{{route('blog.edit',$blogs->id)}}" class="btn btn-primary"> <i class="fas fa-pen"></i> </a>
                                    </div>
                                    <div class="col-md-5">
                                        <form action="{{route('blog.delete',$blogs->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                            <button type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i>  </button>
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
        </div>
    </div>    
</div>


@endsection