<x-app-layout>
@section('title', 'Contact-us')

<section class="sign-up-page contact-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="content">
                    <h2 class="main-heading" style="color: #207FA8;">Contact Us</h2>
                    <p>Have questions or need assistance? We're here to help! 
                        Contact us for inquiries about our services, support, 
                        or collaborations. Reach out via phone, email,
                        or our contact form, and our team will get back to you as soon as possible.
                    </p>
                    <form action="{{route('contact.store')}}" method="POST" class="needs-validation" novalidate
                    id="contactForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Name*</label>
                                <input type="text" class="form-control" id="name" placeholder="Name"
                                    name="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="mobile" class="form-label">Mobile Number*</label>
                                <input type="number" class="form-control" id="name" placeholder="Mobile Number"
                                    name="mobile_number"  required>
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
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" placeholder="Message" name="message" required></textarea>
                            </div>
                            
                          
                           
                            <div class="col-lg-12 d-flex justify-content-end mt-3">
                                <button class="btn px-5" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5 position-relative d-none d-lg-block">
                <div class="content-wrapper">
                  <ul>
                    <li>
                        <div class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                            </div>    
                          <div class="content">
                            <span>Address</span>
                            <p class="mb-0">B-30,Sector- 6 ,Noida <br>
                                Uttar Pradesh - 201301</p>
                          </div>
                    
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                            </div>    
                          <div class="content">
                            <span>Mobile</span>
                            <a href="#">(+91) 8383849293,
                                (+9120) 9143326 </a>
                          </div>
                    
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                            </div>    
                          <div class="content">
                            <span>Email Address</span>
                            <a href="#">info@dofix.in</a>
                          </div>
                    
                    </li>
                  </ul>
                </div>
            </div>
        </div>
</section>
@push('scripts')
<script>
$(document).on('submit', '#contactForm', function(e) {
    e.preventDefault();
    $('#contactForm').addClass('was-validated');
    if ($('#contactForm')[0].checkValidity() === false) {
        event.stopPropagation();
    } else {
        this.submit();
    }
});
</script>
@endpush
</x-app-layout>