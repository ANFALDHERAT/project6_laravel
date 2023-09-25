@extends('layout.master')
@section('title','services')
	@section('content')

    <div class="hero overlay" style="background-image: url({{asset('style/images/vo55.png')}})">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6 text-center">
					<h1 class="heading text-white mb-2" data-aos="fade-up">Service Form</h1>

				</div>
			</div>
		</div>
	</div>


<div class="container"   >
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <form method="POST" action="{{ route('service.store') }}" class="bg-light p-5 rounded donation-form" data-aos="fade-up" style="margin: 50px" >
            @csrf
            <input type="hidden" name="service_id" value="{{ $service->id }}">

            <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control px-4 " id="name" placeholder="Enter your name"
                    value="{{ $user->name }}" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control px-4" id="email" placeholder="Enter your email"
                        value="{{ $user->email }}" name="email" required>
                        @error('email')
                       <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control px-4" id="phone" placeholder="Enter your phone"
                        value="{{ $user->phone }}" name="phone" required>
                        @error('phone')
                     <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="Description">Description</label>
                    <input type="text" name="description" class="form-control" id="Description" placeholder="Description">
                </div>


                <div class="form-group">
                    <label for="time">Date Available</label>
                    <input type="date" name="date" class="form-control" id="time" placeholder="Your Available date">
                </div>
                <div class="form-group">
              <label for="time">Time Available</label>
               <input type="time" name="time" class="form-control" id="time" placeholder="Your Available time">
                </div>

                <input type="submit" value="Submit" class="btn btn-primary ">


            </form>
        </div>
    </div>
</div>

@endsection
