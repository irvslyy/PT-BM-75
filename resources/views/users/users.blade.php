@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3 class="panel-title">Manage Users</h3></div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">usename</label>
                                <input type="text" class="form-control" name="" placeholder="username">
                            </div>
                            <div class="form-group">
                                <label for="">email</label>
                                <input type="text" class="form-control" name="" placeholder="email">
                            </div>
                            <div class="form-group">
                                <label for="">password</label>
                                <input type="text" class="form-control" name="" placeholder="password">
                            </div>
                            <button type="submit" class="btn btn-primary">submit</button>
                        </div>
                        <div class="col-md-6">
                            
                        </div>
                    </div>

                
                </div>
            </div>
        </div>
    </div>
</div>



@endsection