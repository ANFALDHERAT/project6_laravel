@extends('layout.master')
@section('title', 'donation form')
@section('content')

<div class="home-slider owl-carousel " style="height:500px ">

    <div  class="slider-item " style="background-image:url({{asset('style/images/donation3.jpg')}});height: 500px">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-center">
                        
                        <h1 class="mb-5" style="font-size: 70px;margin-top:-150px">Donation</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

    <div class="container" style="margin-top:80px ;  margin-bottom: 80px;">

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <form action="{{ route('submitdonate') }}" class="bg-light p-5 rounded donation-form" data-aos="fade-up"
                    method="post">
                    @csrf
                    <div class="form-field mb-3">
                        <label for="amount-1" class="amount js-amount" data-value="1.00">
                            <input type="radio" id="amount-1" name="radio-amount" checked="true">
                            <span>$1</span>
                        </label>

                        <label for="amount-2" class="amount js-amount" data-value="5.00">
                            <input type="radio" id="amount-2" name="radio-amount">
                            <span>$5</span>
                        </label>
                        <label for="amount-3" class="amount js-amount" data-value="25.00">
                            <input type="radio" id="amount-3" name="radio-amount">
                            <span>$25</span>
                        </label>
                        <label for="amount-4" class="amount js-amount" data-value="100.00">
                            <input type="radio" id="amount-4" name="radio-amount">
                            <span>$100</span>
                        </label>

                    </div>


                    <div class="field-icon mb-3">
                        <input type="number" placeholder="0.00" class="form-control px-4" name="price" value="1.00"
                            style="position: relative;">
                        <span style="position: absolute; left: 5px; top: 50%;">$</span>
                    </div>

                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-field mb-4">
                        <input type="name" placeholder="Name" class="form-control px-4" value="{{ $user->name }}"
                            name="name">
                    </div>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <input type="name" placeholder="Name" class="form-control px-4" value="{{ $donation->id }}"
                        name="donation_id" hidden>
                    <div class="form-field mb-4">
                        @error('donation_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <input type="email" placeholder="Email" class="form-control px-4" value="{{ $user->email }}"
                            name="email">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-field mb-3">

                        <input type="text" placeholder="Phone" class="form-control px-4" value="{{ $user->phone }}"
                            name="phone">
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-field mb-4 ml-4" style="">
                        <input class="form-check-input" type="checkbox" 
                            id="showdonation" value="yes" name='showdonation' />
                        <label class="form-check-label" for="showdonation"> I give my consent to display my donation in your website </label>
                    </div>


                    <input type="submit" value="Submit" class="btn btn-primary ">

                </form>

            </div>
        </div>
    </div>

@endsection
