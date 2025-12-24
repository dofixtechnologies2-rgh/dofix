<x-app-layout>
@section('title', 'Home')


<section>
      <!-- Swiper container -->
      <div class="swiper mySwiper container">
        <div class="swiper-wrapper content">
          
          <div class="swiper-slide card">
            <div class="card-content">
             
              <div class="image">
                <img src="web/images/offer1.jpg" alt=" Image 1" />
              </div>
    
             
              <!-- Buttons -->
              <div class="button">
                <button class="explorenow"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#bookServiceMoal">Book Now</button></a>
              
              </div>
			  
			  
			  <!-- Buttons -->
            </div>
          </div>
    
          <!-- Swiper slide item 2 -->
         <div class="swiper-slide card">
            <div class="card-content">
             
              <div class="image">
                <img src="web/images/offer2.jpg" alt="image 2" />
              </div>
    
            
              <!-- Buttons -->
             
			 <div class="button">
                <button class="explorenow"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#bookServiceMoal">Book Now</button></a>
              
              </div>
			 
			  <!-- Buttons -->
            </div>
          </div>
  
          <!-- Swiper slide item 3 -->
          <div class="swiper-slide card">
            <div class="card-content">
             
              <div class="image">
                <img src="web/images/offer3.jpg" alt="Image 3" />
              </div>
    
           
              <!-- Buttons -->
             <div class="button">
                <button class="explorenow"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#bookServiceMoal">Book Now</button></a>
              
              </div>
			 
			  <!-- Buttons -->
            </div>
          </div>
  
          <!-- Swiper slide item 4 -->
          <div class="swiper-slide card">
            <div class="card-content">
             
              <div class="image">
                <img src="web/images/offer4.jpg" alt="Image 4" />
              </div>
    
             
              <!-- Buttons -->
             
			 <div class="button">
                <button class="explorenow"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#bookServiceMoal">Book Now</button></a>
              
              </div>
			  <!-- Buttons -->
            </div>
          </div>
  
          <!-- Swiper slide item 5 -->
         <div class="swiper-slide card">
            <div class="card-content">
             
              <div class="image">
                <img src="web/images/offer5.jpg" alt="Image 5" />
              </div>
    
             
              <!-- Buttons -->
			  <div class="button">
                <button class="explorenow"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#bookServiceMoal">Book Now</button></a>
              
              </div>
			  
              <!-- Buttons -->
            </div>
          </div>
  
          <!-- Swiper slide item 6 -->
          <div class="swiper-slide card">
            <div class="card-content">
             
              <div class="image">
                <img src="web/images/offer6.jpg" alt="Image 6" />
              </div>
    
             
              <!-- Buttons -->
              <div class="button">
                <button class="explorenow"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#bookServiceMoal">Book Now</button></a>
              
              </div>
			  <!-- Buttons -->
            </div>
          </div>
  
          
        </div>
		 
	  
      </div>
    
      
	  <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      
	  
    </section>




<section class="banner">
    <div class="container">
     <div class="row">
         <div class="col-12">

              <!-- Carousel -->
     <div id="demo" class="carousel slide" data-bs-ride="carousel">

        

         <!-- The slideshow/carousel -->
         <div class="carousel-inner">
             <div class="carousel-item banner-one active" style="background: url('{{ asset('web/images/dofix-banner-bg-1.jpg') }}') no-repeat;">
            <div class="banner-content">
             <div class="row ">
                 <div class="col-md-12">
                     <div class="content">
                         <h1>We Succeed when you are satisfied</h1>
                         <p>Your trusted partner for electricity, water, and gas solutions, ensuring comfort and sustainability for your home or business</p>
                         <div class="btn-group mb-5">
                             {{-- <a class="btn setupBtn me-2" href="{{url('/provider-onboard-step-one')}}">Setup your service</a> --}}
                             <button class="btn bookBtn ms-2" data-bs-toggle="modal" data-bs-target="#bookServiceMoal">Book a service</button>
        
                           
                         </div>
                     </div>
                 </div>
                 
             </div>
            </div>
             </div>
             <div class="carousel-item banner-two" style="background:  url('{{ asset('web/images/dofix-banner-bg-2.jpg') }}') no-repeat;">
                 <div class="banner-content">
                       <div class="row ">
                         <div class="col-md-12">
                             <div class="content">
                             <h1>Partner with Us & Expand Your Reach</h1>
                             <p>We’re looking for skilled, reliable service providers to join our growing network and offer top-notch utility solutions to our customers</p>
                             <div class="btn-group mb-5">
                                 <a class="btn register-btn" id="registerbtn" href="{{url('/provider-onboard-step-one')}}">Join with us</a>
                               
                             </div>
                         </div>
                     </div>
                    
                     </div>
                 </div>
             </div>
             <div class="carousel-item banner-three" style="background: url('{{ asset('web/images/dofix-banner-bg-3.jpg') }}') no-repeat;">
                 <div class="banner-content">
                       <div class="row">
                     <div class="col-md-12">
                         <div class="content">
                             <h1>Unlock New Opportunities: Become <br> a DoFix Service Partner Today!</h1>
                             <p>Ready to get started? Fill out your registration form now!</p>
                             <div class="btn-group mb-5">
                                 <a class="btn join-btn" id="joinbtn" href="{{url('/provider-onboard-step-one')}}">Join Our Network</a>
                               
                             </div>
                         </div>
                     </div>
                     
                     </div>
                 </div>
             </div>
         </div>
         <div class="range-container">
                     
             <input type="range" id="slider" min="1" max="3" step="1" value="1">
             <span class="range-value" id="rangeValue" style="left: -157.5px;">01</span>
         </div>
         <!-- Left and right controls/icons -->
         <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
             <span class="carousel-control-prev-icon"></span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
             <span class="carousel-control-next-icon"></span>
         </button>
     </div>
         </div>
     </div>
    </div>

 </section>


<section class="aboutUs" style="background: url({{asset('web/images/who-are-we-bg.webp')}}) no-repeat;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="image">
                    <img src="{{asset('web/images/Aboutus.webp')}}" class="img-fluid" alt="AboutUs">
                </div>
            </div>
            <div class="col-md-7">
                <div class="content">
                    <h2 class="subTilte mb-2">Why Choose Us?</h2>
                    <p>
                        <b>Budget-Friendly : </b>We believe that high-quality services shouldn’t come with a high price tag. Our
                        competitive pricing ensures you get the best value for your money. 
                    </p>

                    <p>
                        <b>Convenience : </b>We bring our services to you, saving you time and effort. Book online or call us,
                        and our professionals will arrive at your home ready to provide exceptional service. 
                    </p>

                    <p>
                        <b>Quality Assurance : </b>
                        Our team consists of trained and experienced professionals who are
                        dedicated to delivering top-notch services. We use only the best products and tools to ensure
                        superior results. 
                    </p>

                    <p>
                        <b>Customer Satisfaction : </b>
                        Your satisfaction is our priority. We work closely with our clients to
                        understand their needs and exceed their expectations. Our customer support is always available
                        to address any concerns or questions.
                    </p>

                    <a class="btn mt-4" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#bookServiceMoal">Know More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer-bottom" style="background: url({{asset('web/images/footer-bottom-bg.webp')}}) no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
            <div class="content">
                <h2 class="mb-3">Stay Cool All Year Round with Expert AC Repair Services</h2>
                <p>Keep your home comfortable with our expert AC repair services. Fast, reliable, and affordable
                    solutions from certified technicians.</p>
                <a class="btn mt-4" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#bookServiceMoal">Book Service</a>
            </div>
            </div>
        </div>
    </div>
</section>





<section class="Services">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <span class="subTilte mb-2">What we Help with</span>
                <h1 class="main-heading mb-3">Services Offered by DoFix</h1>
                <p>
                    We provide professional home cleaning services to keep your space spotless 
                    using high-quality products, ensuring a fresh and hygienic environment. 
                    Our expert home maintenance services cover repairs and installations,
                    making it easy to keep your<br> home in top condition without any hassle.
                </p>
            </div>
        </div>
        <div class="row">

                        <div class="column mb-4">
                <a href="https://dofix.in/service/ac-repair-rent-service-installation" class="text-decoration-none">
                <div class="box">
                    <div class="image">
                        <img src="public/admin/service_image/s1.jpg" class="img-fluid" alt="AC Repair">
                    </div>
                    <div class="content">
                        <h5>AC Repair &amp; Rent Service Installation</h5>
                    </div>
                </div>
                </a>
            </div>
                        <div class="column mb-4">
                <a href="https://dofix.in/service/refrigerator-repair" class="text-decoration-none">
                <div class="box">
                    <div class="image">
                        <img src="public/admin/service_image/s2.jpg" class="img-fluid" alt="AC Repair">
                    </div>
                    <div class="content">
                        <h5>Refrigerator Repair</h5>
                    </div>
                </div>
                </a>
            </div>
                        <div class="column mb-4">
                <a href="https://dofix.in/service/washing-machine-repair" class="text-decoration-none">
                <div class="box">
                    <div class="image">
                        <img src="public/admin/service_image/s3.jpg" class="img-fluid" alt="AC Repair">
                    </div>
                    <div class="content">
                        <h5>Washing Machine Repair</h5>
                    </div>
                </div>
                </a>
            </div>
                        <div class="column mb-4">
                <a href="https://dofix.in/service/water-purifier-repair-electrician" class="text-decoration-none">
                <div class="box">
                    <div class="image">
                        <img src="public/admin/service_image/s4.jpg" class="img-fluid" alt="AC Repair">
                    </div>
                    <div class="content">
                        <h5>Water Purifier Repair &amp; Electrician</h5>
                    </div>
                </div>
                </a>
            </div>
                        <div class="column mb-4">
                <a href="https://dofix.in/service/interior-work" class="text-decoration-none">
                <div class="box">
                    <div class="image">
                        <img src="public/admin/service_image/s5.jpg" class="img-fluid" alt="AC Repair">
                    </div>
                    <div class="content">
                        <h5>Interior Work</h5>
                    </div>
                </div>
                </a>
            </div>
                        <div class="column mb-4">
                <a href="https://dofix.in/service/steel-fabrication-work" class="text-decoration-none">
                <div class="box">
                    <div class="image">
                        <img src="public/admin/service_image/s6.jpg" class="img-fluid" alt="AC Repair">
                    </div>
                    <div class="content">
                        <h5>Steel Fabrication Work</h5>
                    </div>
                </div>
                </a>
            </div>
                        <div class="column mb-4">
                <a href="https://dofix.in/service/glass-fabrication-work" class="text-decoration-none">
                <div class="box">
                    <div class="image">
                        <img src="public/admin/service_image/s7.jpg" class="img-fluid" alt="AC Repair">
                    </div>
                    <div class="content">
                        <h5>Glass Fabrication Work</h5>
                    </div>
                </div>
                </a>
            </div>
                        <div class="column mb-4">
                <a href="https://dofix.in/service/plumber" class="text-decoration-none">
                <div class="box">
                    <div class="image">
                        <img src="public/admin/service_image/s8.jpg" class="img-fluid" alt="AC Repair">
                    </div>
                    <div class="content">
                        <h5>Plumber</h5>
                    </div>
                </div>
                </a>
            </div>
                        <div class="column mb-4">
                <a href="https://dofix.in/service/painter" class="text-decoration-none">
                <div class="box">
                    <div class="image">
                        <img src="public/admin/service_image/s9.jpg" class="img-fluid" alt="AC Repair">
                    </div>
                    <div class="content">
                        <h5>Painter</h5>
                    </div>
                </div>
                </a>
            </div>
                        <div class="column mb-4">
                <a href="https://dofix.in/service/carpenter" class="text-decoration-none">
                <div class="box">
                    <div class="image">
                        <img src="public/admin/service_image/s10.jpg" class="img-fluid" alt="AC Repair">
                    </div>
                    <div class="content">
                        <h5>Carpenter</h5>
                    </div>
                </div>
                </a>
            </div>
                        <div class="column mb-4">
                <a href="https://dofix.in/service/wedding-event" class="text-decoration-none">
                <div class="box">
                    <div class="image">
                        <img src="public/admin/service_image/s11.jpg" class="img-fluid" alt="AC Repair">
                    </div>
                    <div class="content">
                        <h5>Wedding Event</h5>
                    </div>
                </div>
                </a>
            </div>
                        <div class="column mb-4">
                <a href="https://dofix.in/service/sofa-repair" class="text-decoration-none">
                <div class="box">
                    <div class="image">
                        <img src="https://dofix.in/public/admin/service_image/1742619891_service_image.jpg" class="img-fluid" alt="AC Repair">
                    </div>
                    <div class="content">
                        <h5>Sofa Repair</h5>
                    </div>
                </div>
                </a>
            </div>
                        <div class="column mb-4">
                <a href="https://dofix.in/service/home-cleaning" class="text-decoration-none">
                <div class="box">
                    <div class="image">
                        <img src="public/admin/service_image/s12.jpg" class="img-fluid" alt="AC Repair">
                    </div>
                    <div class="content">
                        <h5>Home Cleaning</h5>
                    </div>
                </div>
                </a>
            </div>
                    </div>
    </div>
</section>


<!-- The Modal -->
<div class="modal" id="bookServiceMoal">
    <div class="modal-dialog">
      <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal">x</button>
       
        <!-- Modal body -->
        <div class="modal-body">
        
            <form action="{{route('contact.store')}}" method="POST" class="needs-validation" novalidate
                id="bookServiceForm">
                @csrf
               <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <h4 class="modal-title">Book a Service</h4>
                            <p>Fill a Quick form and complete your booking </p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label  class="form-label">Name*</label>
                            <input type="text" class="form-control" name="name" placeholder="Full Name" id="name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label  class="form-label">Mobile Number*</label>
                            <input type="number" class="form-control" name="mobile_number" placeholder="Mobile Number" id="number" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="mobile" class="form-label">Email*</label>
                            <input type="email" class="form-control" id="email" placeholder="Email"
                                name="email" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="serviceType" class="form-label">Service Type*</label>
                            <select id="serviceType" name="service_id" class="form-control" required>
                                <option value="" selected disabled>Select Service</option>
                                @foreach($services as $service)
                                <option value="{{$service->id}}">{{$service->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        


                        <div class="col-md-6 mb-3">
                            <label for="serviceTiming">Service Date*</label>
                            <input type="date" class="form-control" id="serviceDate"
                                placeholder="service Date" name="date" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="serviceTiming">Service Time*</label>
                            <input type="time" class="form-control" id="serviceTime"
                                placeholder="service time" name="time" required>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="address">Address*</label>
                            <input type="text" class="form-control" id="Address" placeholder="Address"
                                name="address" required>
                        </div>
						
					
						
                        <div class="col-md-12 mb-3">
                            <label for="message">Message*</label>
                            <textarea class="form-control" id="message" placeholder="Message" name="message"></textarea>
                        </div>

                        <div class="col-md-12">
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn">Submit</button>
                            </div>
                        </div>

                    </div>
                </div>
               </div>              
            </form>
        </div>
  
       
  
      </div>
    </div>
  </div>

@push('scripts')
    <script>
        $(document).on('submit', '#bookServiceForm', function(e) {
            e.preventDefault();
            $('#bookServiceForm').addClass('was-validated');
            if ($('#bookServiceForm')[0].checkValidity() === false) {
                event.stopPropagation();
            } else {
                this.submit();
            }
        });
		
		
		var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        grabCursor: true,
        loop: true,
        autoplay: {
      delay: 2000, // 2 seconds
      disableOnInteraction: false, // keep autoplay active after user interacts
    },
        // Pagination
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },

        // Next and previous navigation
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        // Responsive breakpoints
        breakpoints: {
          0: {
            slidesPerView: 1
          },
          768: {
            slidesPerView: 2
          },
          1024: {
            slidesPerView: 3
          }
        }
      });
	  
	 
	 
    </script>
@endpush

</x-app-layout>