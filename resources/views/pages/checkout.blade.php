@extends('layouts.checkout')

@section('title','Checkout')
    
@section('content')
<main>
    <section class="section-details-header">
        <div class="container">
            <div class="row">
                <div class="col pl-lg-0 pl-sm-2">
                    <nav>
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item">Paket Travel</li>
                            <li class="breadcrumb-item">Details</li>
                            <li class="breadcrumb-item active">Checkout</li>
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

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <h1>Who is going?</h1>
                        <p class="location-detail">Trip to {{$item->travel_package->title}},{{$item->travel_package->location}}</p>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>Picture</td>
                                        <td>Name</td>
                                        <td>Nationality</td>
                                        <td>Visa</td>
                                        <td>Passport</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>      
                                    @forelse ($item->details as $detail)
                                        <tr>
                                            <td>
                                                <img src="https://ui-avatars.com/api/?name={{$detail->username}}" height="60" class="rounded-circle">
                                            </td>
                                            <td class="align-middle">
                                                {{$detail->username}}
                                            </td>
                                            <td class="align-middle">
                                                {{$detail->nationality}}
                                            </td>
                                            <td class="align-middle">
                                                {{$detail->is_visa ? '30 days':'N/A'}}
                                            </td>
                                            <td class="align-middle">
                                                {{-- Active --}}
                                                {{\Carbon\carbon::createFromDate($detail->doe_passport) > \Carbon\carbon::now() ? 'Active' : 'Inactive'}}
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{route('checkout-remove',$detail->id)}}">
                                                    <img src="{{url('frontend/images/ic_remove.png')}}">
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center" colspan="6">No Visitor</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="member mt-3">
                            <h2>Add Member</h2>
                            <form class="form-inline" action="{{route('checkout-create',$item->id)}}" method="POST">
                                @csrf
                                <label for="username" name="username" class="sr-only">Name</label>
                                <input type="text" name="username" class="form-control mb-2 mr-sm-2" id="username" placeholder="Username" required>
                                
                                <label for="nationality" name="nationality" class="sr-only">Nationality</label>
                                <input type="text" name="nationality" class="form-control mb-2 mr-sm-2" id="nationality" placeholder="Nationality" style="width : 50px" required>
                                
                                <label for="is_visa" class="sr-only" Visa></label>
                                <select name="is_visa" id="is_visa" class="custom-select mb-2 mr-sm-2" required>
                                    <option value=""  selected>VISA</option>
                                    <option value="1">30 Days</option>
                                    <option value="0">N/A</option>
                                </select>
                                <label for="doe_passport" class="sr-only">DOE Passport</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="text" name="doe_passport" class="form-control datepicker" id="doe_passport" placeholder="DOE Passport" required>
                                </div>
                                <button class="btn btn-add-now mb-2 px-4">
                                    Add Now
                                </button>
                            </form>
                            <h3 class="mt-2 mb-0">Note</h3>
                            <p class="disclamer mb-0 text-muted">
                                You are only able to invite member that has registered in Nomads.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pl-lg-0 pl-sm-2">
                    <div class="card card-details card-right">
                        <h2>Members are going</h2>
                        <table class="trip-information">
                            <tr>
                                <th width="50%">Members</th>
                                <td width="50%" class="text-right">
                                    {{$item->details->count()}} person
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Additional Visa</th>
                                <td width="50%" class="text-right">
                                    $ {{$item->additional_visa}}
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Trip Price</th>
                                <td width="50%" class="text-right">
                                    $ {{$item->travel_package->price}},00 / person
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Sub Total</th>
                                <td width="50%" class="text-right">
                                    $ {{$item->transaction_total}},00
                                </td>
                            </tr>
                            <tr>
                                <th width="60%">Total (+Unique Code)</th>
                                <td width="40%" class="text-right text-total">
                                    <span class="text-blue">$ {{$item->transaction_total}},</span>
                                    <span class="text-orange">{{mt_rand(0,99)}}</span>
                                </td>
                            </tr>
                        </table>
                        <hr />
                        <h2>Paymen Instruction</h2>
                        <p class="payment-instruction">
                            Please complete your payment before to continue the wonderful trip
                        </p>
                        <div class="bank">
                            <div class="bank-item pb-3">
                                <img src="{{url('frontend/images/ic_bank.png')}}" class="bank-image">
                                <div class="description">
                                    <h3>PT. NOMADS ID</h3>
                                    <p>
                                        0881 8829 8800
                                        <br>
                                        Bank Central Asia
                                    </p>
                                </div> 
                            </div>
                            <div class="clearfix"></div>
                            <div class="bank-item pb-3">
                                <img src="{{url('frontend/images/ic_bank.png')}}" class="bank-image">
                                <div class="description">
                                    <h3>PT. NOMADS ID</h3>
                                    <p>
                                        0899 8501 7888
                                        <br>
                                        Bank HSBC
                                    </p>
                                </div> 
                            </div>
                        </div>

                    </div>
                    <div class="join-container">
                        <a href="{{route('checkout-success',$item->id)}}" class="btn btn-block btn-join-now mt-3 py-2">
                            I Have Made Payment
                        </a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="#" class="text-muted">
                            Cancel Booking
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection