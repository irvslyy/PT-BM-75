@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          <form action="{{route('material.store')}}" method="POST">
          @csrf
            <div class="panel">
                <div class="panel-heading"><h3 class="panel-title">masukan material</h3></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">project</label>
                                <input type="text" class="form-control" name="project" placeholder="project">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">buying date</label>
                                <input type="text" class="form-control date-material" name="buying_date" placeholder="project">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">price</label>
                                <input type="text" class="form-control" name="price" placeholder="project">
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary">
                    <a href="{{route('material.index')}}" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> </a>
                </div>
            </div>
          </form>
        </div>
    </div>
</div>



@endsection