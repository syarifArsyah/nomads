@extends('layouts.admin')

@section('title','Gallery | Edit Data')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edir Gallery</h1>
    </div>

    <div class="row justify-content-center">
        <div class="card shadow col-lg-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif

            <div class="card-body">
                <form action="{{route('gallery.update',$item->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="travel_packages_id">Paket Travel</label>
                        <select name="travel_packages_id" class="form-control{{$errors->has('travel_package_id')?'is-invalid' : ''}}" required>
                            <option value="{{$item->travel_packages_id}}">Jangan di ubah</option>
                            @foreach ($travel_packages as $travel_package)
                                <option value="{{$travel_package->id}}">{{$travel_package->title }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('travel_packages_id'))
                            <div class="invalid-feedback">
                                {{$errors->first('travel_packages_id')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control {{$errors->has('image')?'is-invalid':''}}" name="image" placeholder="Image">
                    </div>
                    {{-- @if ($errors->has('image'))
                            <div class="invalid-feedback">
                                {{$errors->first('image')}}
                            </div>
                    @endif --}}
                    @if ($errors->has('image'))
                        <div class="invalid-feedback">
                            {{$errors->first('image')}}
                        </div>
                        @endif

                    <button class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection