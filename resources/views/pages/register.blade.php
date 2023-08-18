@extends('layout.index')
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Register</h1>
    </div>
    <hr />
    <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Username</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="username">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleFormControlInput1" name="password">
        </div>
        <button type="submit" class="btn btn-primary form-control">Sign Up</button>
    </form>
@endsection
