@extends('layout.index')
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">product</h1>
    </div>
    <hr />
    <form action="{{route('product.store')}}" method="POST" >
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="NamaProduk">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Qty</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="Qty">
        </div>
        <button type="submit" class="btn btn-primary form-control mb-2">Submit</button>
    </form>
@endsection
