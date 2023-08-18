@extends('layout.index')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Dashboard</h1>
    </div>
    <hr />
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Total User</h5>
                <div class="card-body">
                    <h5 class="card-title text-center">{{$totalUser}}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Total Product</h5>
                <div class="card-body">
                    <h5 class="card-title text-center">{{$totalProduct}}</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
