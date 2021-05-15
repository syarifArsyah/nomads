@extends('layouts.admin')

@section('title','Travel-Package | Add Data')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Travel Packages</h1>
    </div>

    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <div class="row justify-content-center">
        <div class="card shadow col-lg-12">
            <div class="card-body">
                <form action="{{route('travel-package.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid':''}}" name="title" placeholder="Title" value="{{old('title')}}">
                        @if ($errors->has('title'))
                        <div class="invalid-feedback">
                            {{$errors->first('title')}}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control {{$errors->has('location') ? 'is-invalid':''}}" name="location" placeholder="Location" value="{{old('location')}}">
                        @if ($errors->has('location'))
                            <div class="invalid-feedback">
                                {{$errors->first('location')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <Textarea class="form-control d-block w-100 {{$errors->has('about')?'is-invalid':''}}" rows="5" name="about" placeholder="About">
                            {{old('about')}}
                        </Textarea>
                        @if ($errors->has('about'))
                            <div class="invalid-feedback">
                                {{$errors->first('about')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="featured_event">Featured Event</label>
                        <input type="text" class="form-control {{$errors->has('featured_event')?'is-invalid':''}}" name="featured_event" placeholder="Featured Event" value="{{old('featured_event')}}">
                        @if ($errors->has('featured_event'))
                            <div class="invalid-feedback">
                                {{$errors->first('featured_event')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="language">Language</label>
                        <input type="text" class="form-control {{$errors->has('language')?'is-invalid':''}}" name="language" placeholder="Langauge" value="{{old('language')}}">
                        @if ($errors->has('language'))
                            <div class="invalid-feedback">
                                {{$errors->first('language')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="foods">Foods</label>
                        <input type="text" class="form-control {{$errors->has('foods')?'is-invalid':''}}" name="foods" placeholder="Foods" value="{{old('foods')}}">
                        @if ($errors->has('foods'))
                            <div class="invalid-feedback">
                                {{$errors->first('foods')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="departure_date">Departure Date</label>
                        <input type="date" class="form-control {{$errors->has('departure_date')?'is-invalid':''}}" name="departure_date" placeholder="departure_date" value="{{old('departure_date')}}">
                        @if ($errors->has('departure_date'))
                            <div class="invalid-feedback">
                                {{$errors->first('departure-date')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="duration">Duration</label>
                        <input type="text" class="form-control {{$errors->has('duration')?'is-invalid':''}}" name="duration" placeholder="Duration" value="{{old('duration')}}">
                        @if ($errors->has('duration'))
                            <div class="invalid-feedback">
                                {{$errors->first('duration')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control {{$errors->has('type')?'is-invalid':''}}" name="type" placeholder="Type" value="{{old('type')}}">
                        @if ($errors->has('type'))
                            <div class="invalid-feedback">
                                {{$errors->first('type')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control {{$errors->has('price')?'is-invalid':''}}" name="price" placeholder="Price" value="{{old('price')}}">
                        @if ($errors->has('price'))
                            <div class="invalid-feedback">
                                {{$errors->first('price')}}
                            </div>
                        @endif
                    </div>
                    <button class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection