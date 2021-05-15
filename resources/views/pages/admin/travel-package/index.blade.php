@extends('layouts.admin')

@section('title','Travel-Package')

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
        <h1 class="h3 mb-0 text-gray-800">Travel Packages</h1>
        <a href="{{route('travel-package.create')}}" class="btn btn-primary btn-sm shadow-sm">
            <i class="fas fa-plus fa-sm"> Tambah Data</i>
        </a>
    </div>

    <div class="row card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" width="100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Type</th>
                        <th>Departure Date</th>
                        <th width="20px">Duration</th>
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->location}}</td>
                        <td>{{$item->type}}</td>
                        <td>{{$item->departure_date}}</td>
                        <td>{{$item->duration}}</td>
                        <td>
                            <a href="{{route('travel-package.edit',$item->id)}}" class="btn btn-sm btn-info">
                                <i class="fa fa-pencil-alt fa-sm"></i>
                            </a>
                            <form action="{{route('travel-package.destroy',$item->id)}}" class="d-inline" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                Data Masih Kosong
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('after-script')
    <script>
        $(document).ready(function () {
        window.setTimeout(function() {
            $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
                $(this).remove(); 
            });
        }, 3000);
        });
    </script>
@endpush