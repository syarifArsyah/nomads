@extends('layouts.admin')

@section('title','Travel-Package | edit Data')

@section('content')
<div class="container-fluid">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Travel Packages</h1>
    </div>
    <div class="row justify-content-center">
        <div class="card shadow col-lg-12">
            <div class="card-body">
                <form action="{{route('transaction.update',$item->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="transaction_satus">Status Transaksi</label>
                        <select name="transaction_status" id="" class="form-control" required>
                            <option value="{{$item->transaction_status}}">{{$item->transaction_status}}</option>
                            <option value="IN_CART">In Cart</option>
                            <option value="PENDING">Pending</option>
                            <option value="SUCCESS">Sukses</option>
                            <option value="CANCEL">Cancel</option>
                            <option value="FAILED">Failed</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">UBAH</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection