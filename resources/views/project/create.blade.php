@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('project.store')}}" method="POST">
            @csrf
            <div class="panel">
                <div class="panel-heading"><h3 class="panel-title">create project data</h3></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">kategori project</label>
                                <input type="text" class="form-control" name="project_category" placeholder="kategori project" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">brand project</label>
                                <input type="text" class="form-control" name="brand_project" placeholder="brand project" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">lokasi project</label>
                                <input type="text" class="form-control" name="location_project" placeholder="lokasi project" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">pemegang project</label>
                                <input type="text" class="form-control" name="hold_project" placeholder="pemegang project" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">pekerja project</label>
                                <input type="text" class="form-control" name="worker_project" placeholder="pekerja project" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">harga project</label>
                                <input type="text" class="form-control" name="revenue_project" placeholder="harga project" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">deadline project</label>
                                <input type="date" class="form-control date" name="deadline_project" placeholder="deadline project" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">type project</label>
                                <input type="text" class="form-control date" name="type_project" placeholder="deadline project" required><br>
                                <input type="submit" class="btn btn-primary" value="submit data">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </form>
        </div>
    </div>
</div>


@endsection