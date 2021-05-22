@extends('layouts.checkout')

@section('title','Checkout')
    
@section('content')

<main>
    <div class="section-succes d-flex align-item-center">
        <div class="col text-center">
            <img src="{{url('frontend/images/ic_mail.png')}}" alt="">
            <h1>Yey! Success</h1>
            <p>
                We’ve sent you email for trip instruction 
                <br>
                please read it as well
            </p>
            <a href="{{route('home')}}" class="btn btn-home-page mt-3 px-5">Home Page</a>
        </div>
    </div> 
</main>

@endsection