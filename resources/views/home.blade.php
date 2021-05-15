@extends('layouts.root')

@section('title','Home Nomads')

@section('content')
<div class="container">
    <section class="section-stats row justify-content-center mx-4">
        <div class="col-12 col-sm-6 col-md-2 stats-detail text-center">
            <h2>20K</h2>
            <p>Members</p>
        </div>
        <div class="col-12 col-sm-6 col-md-2 stats-detail text-center">
            <h2>12</h2>
            <p>Countries</p>
        </div>
        <div class="col-12 col-sm-6 col-md-2 stats-detail text-center">
            <h2>3K</h2>
            <p>Hotels</p>
        </div>
        <div class="col-12 col-sm-6 col-md-2 stats-detail text-center">
            <h2>75</h2>
            <p>Partners</p>
        </div>
    </section>
</div>


<section class="section-popular" id="popular">
    <div class="container">
        <div class="row">
            <div class="col text-center section-popular-heading">
                <h2>Wisata Popular</h2>
                <p>
                    Something that you never try
                    <br>
                    before in this world
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section-popular-content" id="popularContent">
    <div class="container">
        <div class="section-popular-travel row justify-content-center">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column"
                style="background-image: url('frontend/images/travel-1.jpg');">
                    <div class="travel-country">INDONESIA</div>
                    <div class="travel-location">Deratan,Bali</div>
                    <div class="travel-button mt-auto">
                        <a href="#" class="btn btn-travel-details">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column"
                style="background-image: url('frontend/images/travel-2.jpg');">
                    <div class="travel-country">INDONESIA</div>
                    <div class="travel-location">Bromo,Malang</div>
                    <div class="travel-button mt-auto">
                        <a href="#" class="btn btn-travel-details">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column"
                style="background-image: url('frontend/images/travel-3.jpg');">
                    <div class="travel-country">INDONESIA</div>
                    <div class="travel-location">Nusa Penida</div>
                    <div class="travel-button mt-auto">
                        <a href="#" class="btn btn-travel-details">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column"
                style="background-image: url('frontend/images/travel-4.jpg');">
                    <div class="travel-country">MIDDLE EAST</div>
                    <div class="travel-location">Dubai</div>
                    <div class="travel-button mt-auto">
                        <a href="#" class="btn btn-travel-details">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-our-networks m-5" id="networks">
    <div class="container">
        <div class="row justify-content-center">
            <div class="heading-our-networks col-12 col-md-4">
                <h2>Our Networks</h2>
                <p>
                    Companies are trusted us
                    <br>
                    more than just a trip
                </p>
            </div>
            <div class="brands-our-networks col-12 col-md-8 pt-3 ju">
                <div class="row">
                    <div class="logo-brand px-2">
                        <img src="{{url('frontend/images/ana.jpg')}}" alt="Brands Our Betworks">
                    </div>
                    <div class="logo-brand px-2">
                        <img src="{{url('frontend/images/disney.jpg')}}" alt="Brands Our Betworks">
                    </div>
                    <div class="logo-brand px-2">
                        <img src="{{url('frontend/images/shangri-la.jpg')}}" alt="Brands Our Betworks">
                    </div>
                    <div class="logo-brand px-2">
                        <img src="{{url('frontend/images/visa.jpg')}}" alt="Brands Our Betworks">
                    </div>
                </div>
                
            </div>

        </div>

    </div>
</section>

<section class="section-testimonial-heading" id="testimonialHeading">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>They Are Loving Us</h2>
                <p>
                    Moments were giving them 
                    <br>
                    the best experience
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section-testimonial-content">
    <div class="container">
        <div class="section-popular-travel row justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                        <img src="{{url('frontend/images/avatar-1.png')}}" alt="Person" class="mb-4 rounded-circle">
                        <h3 class="mb-4">Anjar Budiman</h3>
                        <p class="testimonial">
                            “ It was glorious and I could 
                            not stop to say wohooo for 
                            every single moment
                            Dankeeeeee “
                        </p>
                    </div>
                    <hr>
                    <p class="trip-to mb-2">
                        Trip to Ubud
                    </p>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                        <img src="{{url('frontend/images/avatar-2.png')}}" alt="Person" class="mb-4 rounded-circle">
                        <h3 class="mb-4">Shayna</h3>
                        <p class="testimonial">
                            “ The trip was amazing and
                            I saw something beautiful in
                            that Island that makes me
                            want to learn more “
                        </p>
                    </div>
                    <hr>
                    <p class="trip-to mb-2">
                        Trip to Nusa Penida
                    </p>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                        <img src="{{url('frontend/images/avatar-3.png')}}" alt="Person" class="mb-4 rounded-circle">
                        <h3 class="mb-4">Sharoon</h3>
                        <p class="testimonial">
                            “ I loved it when the waves
                            was shaking harder — I was
                            scared too “
                        </p>
                    </div>
                    <hr>
                    <p class="trip-to mb-2">
                        Trip to Karimun Jawa
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                    I Need Help
                </a>
                <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
                    Get Started
                </a>
            </div>
        </div>
    </div>
</section>
@endsection