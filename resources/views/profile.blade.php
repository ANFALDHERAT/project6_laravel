@extends('layout.masterdark')
@section('title', 'Profile')

@section('content')
    <div class="layout-wrapper layout-content-navbar  " style="margin-top:150px">
        <div class="layout-container">

            <div class="layout-page">


                <div class="content-wrapper">


                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="card mb-4">
                                    <h4 class="card-header">Profile Details</h4>
                                    <!-- Account -->
                                    <div class="card-body pt-2 mt-1">
                                        <form method="POST" action="{{ route('editprofile') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
                                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                                    <img src="{{ $user->image }}" style="width: 150px" alt="user-avatar"
                                                        class="d-block w-px-120 h-px-120 rounded" id="uploadedAvatar" />
                                                    <div class="button-wrapper">
                                                        <label for="upload" class="btn btn-primary me-2 mb-3"
                                                            tabindex="0">
                                                            <span class="d-none d-sm-block">Upload new photo</span>
                                                            <i class="mdi mdi-tray-arrow-up d-block d-sm-none"></i>
                                                            <input type="file" id="upload" class="account-file-input"
                                                                hidden accept="image/png, image/jpg" name="image" />
                                                        </label>

                                                        <div class="text-muted small">Allowed JPG, GIF or PNG. Max size of
                                                            800K
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2 gy-4">
                                                <div class="col-md-12">
                                                    <div class="form-floating form-floating-outline">
                                                        <input class="form-control" type="text" name="name"
                                                            id="firstName" value="{{ $user->name }}" />
                                                        <label for="firstName">Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-floating form-floating-outline">
                                                        <input class="form-control" type="text" id="email"
                                                            name="email" value="{{ $user->email }}"
                                                            placeholder="john.doe@example.com" />
                                                        <label for="email">E-mail</label>
                                                 </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-floating form-floating-outline">
                                                        <input type="text" id="phoneNumber" name="phone"
                                                            class="form-control" placeholder="077 90765332"
                                                            value="{{ $user->phone }}" />
                                                        <label for="phoneNumber">Phone Number</label>
                                                    </div>
                                                </div>

                                            </div>
                                            <input type="submit" value="Save change" class="btn btn-primary me-2">
                                        </form>
                                    </div>
                                    <!-- /Account -->
                                </div>



                                <form id="formAccountDeactivation" onsubmit="return false">
                                    <div class="form-check mb-3 ms-3">
                                    </div>

                                </form>
                                <a  href="{{route('pdf')}}"><button class="btn btn-warning mb-5" >download your donations</button> </a>   
                                
                                <a  href="{{route('pdfService')}}"><button class="btn btn-warning mb-5" >download your services donation</button> </a> 
                                
                                <a  href="{{route('pdfItem')}}"><button class="btn btn-warning mb-5" >download your items donation</button> </a>                       </div>
                        </div>


                    </div>

                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
    @endsection








    <!-- beautify ignore:end -->
