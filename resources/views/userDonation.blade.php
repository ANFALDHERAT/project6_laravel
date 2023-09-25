@extends('layout.masterdark')
@section('title', 'Profile')

@section('content')
<div class="container" style="margin-top: 150px">
    <div class="row">
        @foreach ($DonationForms as $form)
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="item" style="margin-bottom: 20px; margin-top: 20px">
                <div class="feature bg-color-1">
                    <img src="{{ $users->where('id', $form->user_id)->first()->image }}" alt="Image"
                        class="img-fluid mb-4 " style="height: 300px; width:345px">
                    <div class="row">
                        <div class="col-xl-6">
                            <h3 class="mb-0">{{ $users->where('id', $form->user_id)->first()->name }}</h3>
                        </div>
                        <div class="col-xl-6">
                            <h3 class="mb-0"><span>{{ $form->price }}JD</span></h3>
                        </div>
                    </div>
                    <p class="text-black-50" style="padding-left: 15px">
                        {{ $donations->where('id', $form->donation_id)->first()->DonationName }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
