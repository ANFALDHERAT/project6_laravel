@extends('layout.master')
@section('title', 'Donation')
@section('content')

<div class="home-slider owl-carousel " style="height:500px ">

		<div  class="slider-item " style="background-image:url('style/images/donation3.jpg');height: 500px">
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
    <div class="section cause-section bg-light" id="donate">



        <div class="container mb-5">
            <div class="features-slider-wrap position-relative" data-aos="fade-up" data-aos-delay="200">
                <div class="row" id="features-slider">
                    @foreach ($donation as $item)
                        <div class="item col-lg-4">
                            <div class="causes-item bg-white">
                                <a href="{{ route('donationform', ['id' => $item->id]) }}"><img src="{{ $item->image }}"
                                        alt="Image" class="img-fluid mb-4 rounded"></a>
                                <div class="px-4 pb-5 pt-3">

                                <h3><a href="{{ route('donationform', ['id' => $item->id]) }}">{{$item->DonationName}}</a></h3>
                                <p>{{$item->description}}</p>
                                @php

                                        $percentage = ($item->amount_donated / $item->amount_needed) * 100;
                                    @endphp

                                    <div class="progress mb-2">
                                        <div class="progress-bar" role="progressbar" style="width:{{ $percentage }}%;"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{ $percentage }}%
                                        </div>
                                    </div>
                                    <div class="d-flex mb-4 justify-content-between amount">

                                        <div>{{ $item->amount_donated }}JD</div>

                                        <div>{{ $item->amount_needed }}JD</div>
                                    </div>
                                    <div>
                                        <a href="{{ route('donationform', ['id' => $item->id]) }}"
                                            class="btn btn-primary">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


</div>
@endsection
