@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3 class="panel-title">project building</h3></div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">no</th>
                                    <th scope="col">kategori project</th>
                                    <th scope="col">brand project</th>
                                    <th scope="col">lokasi project</th>
                                    <th scope="col">pemegang project</th>
                                    <th scope="col">jenis</th>
                                    <th scope="col">pekerja project</th>
                                    <th scope="col">harga project</th>
                                    <th scope="col">lama pengerjaan</th>
                                    <th scope="col">handle</th>
                                </tr>
                            </thead>
                            @foreach($project as $projects)
                            <tbody>
                                <tr>
                                    <td>{{$projects->id}}</td>
                                    <td>{{$projects->project_category}}</td>
                                    <td>{{$projects->brand_project}}</td>
                                    <td>{{$projects->location_project}}</td>
                                    <td>{{$projects->hold_project}}</td>
                                    <td>{{$projects->type_project}}</td>
                                    <td>{{$projects->worker_project}}</td>
                                    <td>{{$projects->revenue_project}}</td>
                                    <td>{{$projects->deadline_project}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5"><a href="" class="btn btn-primary">edit</a></div>
                                            <div class="col-md-5"><a href="" class="btn btn-danger">delete</a></div>
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
</div>




@endsection