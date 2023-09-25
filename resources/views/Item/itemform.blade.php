@extends('layout.master')
@section('title', 'Item Form')
@section('content')


<div class="home-slider owl-carousel " style="height:500px ">

    <div  class="slider-item " style="background-image:url('{{asset('assets/img/donation.jpeg')}}');height: 500px">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-center">
                        
                        <h1 class="mb-5" style="font-size: 70px;margin-top:-150px">ITEM</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


    <div class=" container" >

        <div class="row justify-content-center">
            <div class="col-lg-8">


                <form action="{{ route('storeitem') }}" method="POST" class="bg-light p-5 rounded donation-form"
                    data-aos="fade-up" style="margin: 50px" enctype="multipart/form-data">
                    @csrf



                    <div class="form-field mb-3">
                        <input type="name" class="form-control px-4" value="{{ $itemid->id }}" name="item_id" hidden>

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control px-4 " id="name" placeholder="Enter your name"
                                value="{{ $user->name }}" name="volunteerName" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control px-4" id="email" placeholder="Enter your email"
                                value="{{ $user->email }}" name="volunteerEmail" required>
                            @error('volunteerEmail')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control px-4" id="phone" placeholder="Enter your phone"
                                value="{{ $user->phone }}" name="volunteerPhone" required>
                            @error('volunteerPhone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control px-4" id="address" placeholder="Enter your address"
                                value="" name="volunteerAddress" required>
                        </div>

                        <div class="form-group">
                            <label for="Description">Description:</label>
                            <textarea type="text" class="form-control px-4" id="description" placeholder="Description about item"
                                name="description" required></textarea>

                        </div>
                        <div class="form-group">
                            <label for="status">Item Stuats:</label>
                            <select class="custom-select my-1 mr-sm-2" id="status" name="status" required>
                                <option selected>Choose item status...</option>
                                <option value="Tolerable">Tolerable</option>
                                <option value="Good">Good</option>
                                <option value="Very Good">Very Good</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="Image">Image:</label>
                            <input type="file" class="form-control px-4" id="Image"
                                placeholder="Enter a clear image for the item" name="image" required>
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <input type="submit" value="Submit" class="btn btn-primary ">

                </form>
            </div>
        </div>
    </div>
@endsection
