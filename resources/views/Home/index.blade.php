
@extends('layout.master')
@section('title','Home')
	@section('content')



	@include('Home.hero')


	@include('Home.ourvision')

	@include('Home.Categories')

	@include('Home.aboutus')



	@include('Home.Projects')
	{{-- <div class="section flip-section secondary-bg" style="background-image: url('style/images/f2.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 mx-auto text-center">
					<span class="subheading-white mb-3 text-white" data-aos="fade-up">Help Now</span>
					<h3 class="mb-4 heading text-white" data-aos="fade-up">Let's Help The Unfortunate People </h3>
					<a href="service" class="btn btn-outline-white me-3" data-aos="fade-up" data-aos-delay="100">Become a Volunteer</a> <a href="donation" class="btn btn-outline-white" data-aos="fade-up" data-aos-delay="200">Donate Now</a>
				</div>
			</div>
		</div>
	</div> --}}


	<div class="section ">
		<div class="container">
			<div class="row justify-content-between ">
				<div class="col-lg-5" data-aos="fade-up">
					<br><br><h2 class="heading mb-4">Our Vision in 2025</h2><br>
					<p>Our vision for the Furniture Donation website is to create a
                        platform that serves as a catalyst for positive change in communities
                         around the world. We envision a world where no usable furniture goes
                         to waste, and where individuals and families in need have access to quality
                          furnishings that can transform their living spaces.<br> Our website aims to bridge
                           the gap between those with surplus furniture and those who require it, fostering
                           a culture of sharing, sustainability, and compassion.<br>
                            We envision a user-friendly
                            and efficient platform that connects donors with recipients, promoting the reuse
                             of furniture and reducing environment waste. Through this website, we aspire
                              to not only furnish homes but also nurture a sense of community, empathy, and
                               responsibility towards our planet. Together, we can turn our vision into
                               a reality, one piece of furniture at a time.</p>
				</div>
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
					<div class="row section-counter">
						<div class="col-lg-6">
							<div class="counter">
								<i class="flaticon-social-services d-block text-secondary"></i>

								<span class="number countup">1000</span>
								<span class="d-block">New Causes</span>
							</div>

							<div class="counter">
								<i class="flaticon-charity-money d-block text-secondary"></i>
								<span class="number">$<span class="countup">1</span>M</span>
								<span class="d-block">Fund Raised</span>
							</div>

						</div>
						<div class="col-lg-6">
							<div class="counter mt-5">
								<i class="flaticon-money-donation d-block text-secondary"></i>
								<span class="number countup">1000</span>
								<span class="d-block">Donors</span>
							</div>

							<div class="counter">
								<i class="flaticon-organs-donation d-block text-secondary"></i>
								<span class="number countup">100</span>
								<span class="d-block">Volunteers</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="section sec-instagram pb-0">
		<div class="container mb-5 ">
			<div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="heading">Our Partners </h2>
                </div>
            </div>
		</div>
	<div class="instagram-slider-wrap" data-aos="fade-up" data-aos-delay="200">
			<div class="instagram-slider" id="instagram-slider">

				<div class="item">
					<a class="instagram-item">
						<img src="style/images/about.png" alt="Image" class="img-fluid">
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<img src="style/images/about22.png"  alt="Image" class="img-fluid">
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<img src="style/images/about3.png" alt="Image" class="img-fluid">
					</a>
				</div>

				<div class="item">
					<a class="instagram-item">
						<img src="style/images/about4.png" alt="Image" class="img-fluid">
					</a>
				</div>



				<div class="item">
					<a class="instagram-item">
						<img src="style/images/about6.png" alt="Image" class="img-fluid">
					</a>
				</div>
				<div class="item">
					<a class="instagram-item">
						<img src="style/images/uni.png" alt="Image" class="img-fluid">
					</a>
				</div>


			</div>
		</div>
		<br><br><br><br>

	@endsection
