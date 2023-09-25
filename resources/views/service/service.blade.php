@extends('layout.master')
@section('title', 'services')
@section('content')

<div class="home-slider owl-carousel " style="height:500px ">

    <div  class="slider-item " style="background-image:url('assets/img/weimun_3_malaysian_muslim_men_and_2_women_volunteers_smiling_th_40cf2997-d86d-4511-b38f-f2292661a35a.png');height: 500px">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-center">
                        
                        <h1 class="mb-5" style="font-size: 70px;margin-top:-150px">Service</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>




    <div class="section cause-section bg-light">

        <div class="container mb-5">
            <div class="features-slider-wrap position-relative" data-aos="fade-up" data-aos-delay="200">
                <div class="row">
                    @foreach ($service as $index => $item)
                        <div class="col-lg-4 mx-auto">
                            <div class="causes-item bg-white">
                                <a href="{{ route('serviceform', ['id' => $item->id]) }}"><img src="{{ $item->image }}"
                                        alt="Image" class="img-fluid mb-4 rounded"
                                        style="height: 350px; width: 500px;"></a>

                                <div class="px-4 pb-5 pt-3">
                                    <h3><a href="{{ route('serviceform', ['id' => $item->id]) }}"
                                            class="join-button">{{ $item->ServiceName }}</a></h3>
                                    <div class="content-wrapper" >
                                        <p>
                                            @php
                                                $description = $item->description;
                                                $words = explode(' ', $description, 11); // Split into words (up to 11 words)
                                                $limitedDescription = implode(' ', array_slice($words, 0, 10)); // Join the first 10 words
                                                $remainingWords = implode(' ', array_slice($words, 10)); // Join the remaining words
                                            @endphp

                                            {{ $limitedDescription }}
                                            @if (count($words) > 10)
                                                <span id="more{{ $item->id }}" style="display: none;">{{ $remainingWords }}</span>
                                                <a href="#" id="link{{ $item->id }}" onclick="toggleDescription(event, {{ $item->id }}); return false;">Read More...</a>
                                            @endif
                                        </p>
                                    </div>
                                    <div>
                                        <a href="{{ route('serviceform', ['id' => $item->id]) }}"
                                            class="btn btn-primary join-button">Join us</a>
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
