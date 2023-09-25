@extends('dashlayouts.master')
@section('title')
Dashboard
@endsection


@section('title-bage1')


Home

@endsection


@section('title-bage2')
Dashboard
@endsection


@section('css')

@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box "  style="background-color: #ffc107">
            <div class="inner">
                <h3>{{count($Users) }}<sup style="font-size: 20px"></sup></h3>

              <p>user number</p>
            </div>
            <div class="icon">
                <i class="nav-icon fas fa-user"></i>
            </div>
            <a href="{{ asset('/user') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box "  style="background-color: #ffc107">
            <div class="inner">


              <h3>{{count( $Admins) }}<sup style="font-size: 20px"></sup></h3>



              <p>admin number</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ asset('/admin') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box "  style="background-color: #ffc107">
            <div class="inner">
                <h3>{{count($Donations) }}<sup style="font-size: 20px"></sup></h3>

              <p>Donation</p>
            </div>
            <div class="icon">
                <i class="nav-icon fas fa-money-bill"></i>
            </div>
            <a href="{{ asset('/donatione') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box "  style="background-color: #ffc107">
            <div class="inner">
                <h3>{{count($Items) }}<sup style="font-size: 20px"></sup></h3>


              <p>Donatione item</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{ asset('/donateditems') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div></div>




        </section>


@endsection

@section('scripts')

@endsection
