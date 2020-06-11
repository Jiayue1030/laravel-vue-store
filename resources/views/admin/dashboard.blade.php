@extends('admin.admin')

@section('left-column')
    @include('admin.admin-left-column')
@stop
@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">DASHBOARD</h1>
        </div>
    </div>
    <div class="row product-list">
        <h1>Hello Admin</h1>
    </div>
@stop
