@extends('layout.masterdark')
@section('title', 'Contactus')

@section('content')

    <div class="content mb-5" style="margin-top:150px">
        <div class="wrapper-1">
            <div class="wrapper-2">
                <h1 style="color:red">Ooops!</h1>
                <p>Your payment has been declend. The payment cancelation page goes here! </p>
                <p> </p>
                <a href="{{ route('home') }}"> <button class="go-home">
                        go home
                    </button></a>
            </div>

        </div>
    </div>

    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
@endsection
