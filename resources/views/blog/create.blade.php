@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-heading"><h3 class="panel-title">create post</h3></div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="" aria-describedby="" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="desc">Desc</label>
                        <textarea class="form-control" id="" rows="3"></textarea>
                    </div>
                    <a href="" class="btn btn-primary">post</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-heading"><h3 class="panel-title">feature</h3></div>
                <div class="panel-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection