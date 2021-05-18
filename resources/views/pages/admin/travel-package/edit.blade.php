@extends('layouts.admin')

@section('title','Travel-Package | edit Data')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Travel Packages</h1>
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
                <form action="{{route('travel-package.update',$item->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid':''}}" name="title" placeholder="Title" value="{{$item->title}}">
                        @if ($errors->has('title'))
                        <div class="invalid-feedback">
                            {{$errors->first('title')}}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control {{$errors->has('location') ? 'is-invalid':''}}" name="location" placeholder="Location" value="{{$item->location}}">
                        @if ($errors->has('location'))
                            <div class="invalid-feedback">
                                {{$errors->first('location')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea class="form-control {{$errors->has('about')?'is-invalid':''}}" name="about" id="about" placeholder="About">{{$item->about}}
                        </textarea>
                        @if ($errors->has('about'))
                            <div class="invalid-feedback">
                                {{$errors->first('about')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="featured_event">Featured Event</label>
                        <input type="text" class="form-control {{$errors->has('featured_event')?'is-invalid':''}}" name="featured_event" placeholder="Featured Event" value="{{$item->featured_event}}">
                        @if ($errors->has('featured_event'))
                            <div class="invalid-feedback">
                                {{$errors->first('featured_event')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="language">Language</label>
                        <input type="text" class="form-control {{$errors->has('language')?'is-invalid':''}}" name="language" placeholder="Langauge" value="{{$item->language}}">
                        @if ($errors->has('language'))
                            <div class="invalid-feedback">
                                {{$errors->first('language')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="foods">Foods</label>
                        <input type="text" class="form-control {{$errors->has('foods')?'is-invalid':''}}" name="foods" placeholder="Foods" value="{{$item->foods}}">
                        @if ($errors->has('foods'))
                            <div class="invalid-feedback">
                                {{$errors->first('foods')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="departure_date">Departure Date</label>
                        <input type="date" class="form-control {{$errors->has('departure_date')?'is-invalid':''}}" name="departure_date" placeholder="departure_date" value="{{$item->departure_date}}">
                        @if ($errors->has('departure_date'))
                            <div class="invalid-feedback">
                                {{$errors->first('departure-date')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="duration">Duration</label>
                        <input type="text" class="form-control {{$errors->has('duration')?'is-invalid':''}}" name="duration" placeholder="Duration" value="{{$item->duration}}">
                        @if ($errors->has('duration'))
                            <div class="invalid-feedback">
                                {{$errors->first('duration')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control {{$errors->has('type')?'is-invalid':''}}" name="type" placeholder="Type" value="{{$item->type}}">
                        @if ($errors->has('type'))
                            <div class="invalid-feedback">
                                {{$errors->first('type')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control {{$errors->has('price')?'is-invalid':''}}" name="price" placeholder="Price" value="{{$item->price}}">
                        @if ($errors->has('price'))
                            <div class="invalid-feedback">
                                {{$errors->first('price')}}
                            </div>
                        @endif
                    </div>
                    <button class="btn btn-primary btn-block">
                        Ubah
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection