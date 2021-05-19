@extends('layouts.root')

@section('title','Travel Package Detail')
    
@section('content')
<main>
    <section class="section-details-header">
        <div class="container">
            <div class="row">
                <div class="col pl-lg-0 pl-sm-2">
                    <nav>
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item">Paket Travel</li>
                            <li class="breadcrumb-item active">Details</li>
                        </ol>
                    </nav>              
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-detail-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pl-lg-0 pl-sm-2">
                    <div class="card card-details p-4">
                        <h1>{{$item->title}}</h1>
                        <p class="location-detail">{{$item->location}}</p>

                        <div class="gallery">
                            @if ($item->galleries->count())
                                
                                <div class="xzoom-container">
                                    <img src="{{Storage::url($item->galleries->first()->image)}}" class="xzoom" id="xzoom-default" xoriginal="{{Storage::url($item->galleries->first()->image)}}">
                                </div>
                            @endif
                            <div class="xzoom-thumbs">
                                <a href="images/detail-image-1.jpg">
                                    <img src="images/detail-image-1.jpg" class="xzoom-galery" width="128" xpreview="images/detail-image-1.jpg">
                                </a>
                                <a href="images/detail-image-2.jpg">
                                    <img src="images/detail-image-2.jpg" class="xzoom-galery" width="128" xpreview="images/detail-image-2.jpg">
                                </a>
                                <a href="images/detail-image-3.jpg">
                                    <img src="images/detail-image-3.jpg" class="xzoom-galery" width="128" xpreview="images/detail-image-3.jpg">
                                </a>
                                <a href="images/detail-image-4.jpg">
                                    <img src="images/detail-image-4.jpg" class="xzoom-galery" width="128" xpreview="images/detail-image-4.jpg">
                                </a>
                                <a href="images/detail-image-5.jpg">
                                    <img src="images/detail-image-5.jpg" class="xzoom-galery" width="128" xpreview="images/detail-image-5.jpg">
                                </a>
                            </div>
                        </div>

                        <h2>Tentang Wisata</h2>
                        <p>
                            {{$item->about}}
                        </p>
                        <div class="features row">
                            <div class="col-md-4 details">
                                <img src="{{url('frontend/images/ic_event.png')}}" alt="Features" class="features-image">
                                <div class="description">
                                    <h3>Featured Event</h3>
                                    <p>{{$item->featured_event}}</p>
                                </div>
                            </div>
                            <div class="col-md-4 details border-left">
                                <img src="{{url('frontend')}}/images/ic_language.png" alt="Features" class="features-image">
                                <div class="description">
                                    <h3>Language</h3>
                                    <p>{{$item->langauge}}</p>
                                </div>
                            </div>
                            <div class="col-md-4 details border-left">
                                <img src="{{url('frontend')}}/images/ic_foods.png" alt="Features" class="features-image">
                                <div class="description">
                                    <h3>Foods</h3>
                                    <p>{{$item->foods}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pl-lg-0 pl-sm-2">
                    <div class="card card-details card-right">
                        <h2>Members are going</h2>
                        <div class="members my-2">
                            <img src="images/member1.png" class="member-image rounded-circle mr-1">
                            <img src="images/member2.png" class="member-image rounded-circle mr-1">
                            <img src="images/member3.png" class="member-image rounded-circle mr-1">
                            <img src="images/member4.png" class="member-image rounded-circle mr-1">
                            <img src="images/member5.png" class="member-image rounded-circle mr-1">
                        </div>
                        <hr>
                        <h2>Trip Information</h2>
                        <table class="trip-information">
                            <tr>
                                <th width="50%">Date of Departure</th>
                                <td width="50%" class="trxt-right">
                                    {{-- 22 Agustus,2019 --}}
                                    {{$item->departure_date}}
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td width="50%" class="trxt-right">
                                    {{$item->duration}}
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <td width="50%" class="trxt-right">
                                    {{$item->type}}
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="trxt-right">
                                    ${{$item->price}} / person
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="#" class="btn btn-block btn-join-now mt-3 py-2">
                            Join Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection