@extends('layouts.admin')

@section('title','Transaction')

@section('content')
<div class="container-fluid">

    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{Session::get('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
    @endif

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaksi Detail</h1>
    </div>

    <div class="row card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%">
                <tr>
                    <th width="200px">Paket Travel</th>
                    <td>{{$item->travel_package->title}}</td>
                </tr>
                <tr>
                    <th width="200px">Pembeli</th>
                    <td>{{$item->user->username}}</td>
                </tr>
                <tr>
                    <th width="200px">Additional Visa</th>
                    <td>${{$item->additional_visa}}</td>
                </tr>
                <tr>
                    <th width="200px">Total transaksi</th>
                    <td>${{$item->transaction_total}}</td>
                </tr>
                <tr>
                    <th width="200px">Status transaksi</th>
                    <td>{{$item->transaction_status}}</td>
                </tr>
                <tr>
                    <th>Pembelian</th>
                    <td>
                        <table class="table table-bordered">
                            <tr>
                                <th>Username</th>
                                <th>Nationality</th>
                                <th>Visa</th>
                                <th>DOE Passport</th>
                            </tr>
                            @foreach ($item->details as $detail)
                            <tr>
                                <td>{{$detail->username}}</td>
                                <td>{{$detail->nationality}}</td>
                                <td>{{$detail->is_visa ? '30 days' :'N/A'}}</td>
                                <td>{{$detail->doe_passport}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
