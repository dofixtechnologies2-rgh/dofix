
<x-app-layout>
    @section('title', 'Onboard Step-1')
<section class="sign-up-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="content">
                    <h2 class="main-heading" style="color: #207FA8;">Sign Up</h2>
                    <p>
                        Complete your onboarding to start your journey with us! Fill in your details to get started.
                    </p>
                   <form action="{{url('/store-onboard-step-one')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate
                        id="providerForm">
                    @csrf
                        <div class="row">

                            
    
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Full Name*</label>
    
                                <input type="text" class="form-control" id="name" required placeholder="Full Name*" name="provider_name" required>
                                @error('provider_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
    
                            <div class="col-md-6 mb-3">
                                <label for="contact" class="form-label">Contact Number*</label>
    
                                <input type="text"  maxlength="10" class="form-control" required id="contact" placeholder="Contact Number*"
                                    name="contact_number" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) ||  event.charCode == 0)">
                                @error('contact_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror 
                            </div>
    
                            <div class="col-md-6 mb-3">
                                <label for="Alternate" class="form-label">Alternate Contact Number</label>
                                <input type="text"  maxlength="10" class="form-control" id="Alternate"
                                    placeholder="Alternate Contact Number" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) ||  event.charCode == 0)" name="alternate_contact_number">
                                @error('alternate_contact_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror 
                            </div>
    
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email*</label>
    
                                <input type="email" class="form-control" required id="email" placeholder="Email Address*"
                                    name="email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror 
                            </div>
              
                            <div class="col-md-6 mb-3">
                                <label for="address" class="form-label">Area* (Aap kitne area tak kar sakte ho?)</label>
                                <input type="text" class="form-control" id="address" placeholder="Address*" required name="address">
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            {{-- <div class="col-md-6 mb-3">
                                <div class="uploadprofile">
                                    <label class="form-label">Profile image*</label>
                                    <label class="imgUplaodFile" onclick="chooseUploadMethod('profile_img')"> 
                                        <img id="profile_preview" src="{{asset('web/images/Upload-Image.svg')}}" class="img-fluid preview-img" alt="Upload Image">
                                        Upload Image*
                                    </label>
                                    <input type="file" id="profile_img" name="profile_img" required accept="image/*" style="display: none;"  capture="environment" onchange="previewImage(event, 'profile_preview')">
                                </div>
                                @error('company_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div> --}}

                            <div class="col-md-6 mb-3">
                            
                                <div id="uploadprofile">
                                    <label for="profile_img" class="form-label">Profile image*</label>
                                   <label class="imgUplaodFile"> 
                                    <input type="file" id="profile_img" name="profile_img" required accept="image/*" capture="environment" onchange="previewImage(event, 'profile_preview')">
                                    <img id="profile_preview" src="{{asset('web/images/Upload-Image.svg')}}" class="img-fluid preview-img" alt="Upload Image">
    
                                    Upload Image*</label>
                                </div>
                                @error('company_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
    
                            <div class="col-md-6 mb-3">
                                <label for="adhar_number" class="form-label">Adhar card number*</label>
                                <input type="text" class="form-control" id="adhar_number" placeholder="Adhar card number *" required
                                    name="adhar_number">
                                @error('company_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
    
                            <div class="col-md-6 mb-3">
                                <div class="uploadprofile">
                                    <label class="form-label">Adhar card image*</label>
                                    <label class="imgUplaodFile" onclick="chooseUploadMethod('adhar_img')"> 
                                        <img id="adhar_preview" src="{{ asset('web/images/Upload-Image.svg') }}" class="img-fluid preview-img" alt="Upload Image">
                                        Upload Image*
                                    </label>
                                    <input type="file" id="adhar_img" name="adhar_image" required accept="image/*" style="display: none;" onchange="previewImage(event, 'adhar_preview')">
                                </div>
                                @error('adhar_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        
    
                            <div class="col-md-6 mb-3">
                                <label for="pan_number" class="form-label">Pan card number*</label>
                                <input type="text" class="form-control" id="pan_number" placeholder="Pan card number *" required
                                    name="pan_number">
                                @error('company_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
    
    
                            <div class="col-md-6 mb-3">
                                <div class="uploadprofile">
                                    <label for="pan_img" class="form-label">Pan card image*</label>
                                    <label class="imgUplaodFile" onclick="chooseUploadMethod('pan_img')"> 
                                        <img id="pan_img_preview" src="{{ asset('web/images/Upload-Image.svg') }}" class="img-fluid preview-img" alt="Upload Image">
                                        Upload Image*
                                    </label>
                                    <input type="file" id="pan_img" name="pan_img" required accept="image/*" style="display: none;" onchange="previewImage(event, 'pan_img_preview')">
                                </div>
                                @error('company_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
    
                            <div class="col-md-6 mb-3">
                                <label for="dl_number" class="form-label">Driving licence number*</label>
                                <input type="text" class="form-control" id="dl_number" placeholder="Driving licence number *" required
                                    name="dl_number">
                                @error('company_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
    
    
                            <div class="col-md-6 mb-3">
                                <div class="uploadprofile">
                                    <label class="form-label"> Driving licence image*</label>
                                    <label class="imgUplaodFile" onclick="chooseUploadMethod('dl_image')">  
                                        <img id="dl_image_preview" src="{{asset('web/images/Upload-Image.svg')}}" class="img-fluid preview-img" alt="Upload Image">
                                        Upload Image*
                                    </label>
                                    <input type="file" name="dl_image" id="dl_image" required accept="image/*" style="display: none;" capture="environment" onchange="previewImage(event, 'dl_image_preview')">
                                </div>
                                @error('company_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
    
                        
                            <div class="col-lg-12 d-flex justify-content-end mt-3">
                                <button type="submit" class="btn px-5">Next</button>
                            </div>

                        </div>
                   </form>
                </div>
            </div>
           
            <div class="col-lg-5">
                <div class="image">
           
                </div>
            </div>
        </div>
    </div>
    </section>
{{-- <div id="mapPopup">
    <button class="btn" id="closePopup">x</button>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56039.069086262076!2d77.19836691953127!3d28.61651760986171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce2daa9eb4d0b%3A0x717971125923e5d!2sIndia%20Gate!5e0!3m2!1sen!2sin!4v1740569958823!5m2!1sen!2sin"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div> --}}

<div id="mapPopup" style="display:none;">
    <button class="btn" id="closePopup">x</button>
    <div id="map" style="width: 600px; height: 450px;"></div>
</div>

<div id="imageSelectionModal" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Select Image Source</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <button type="button" class="btn btn-primary" onclick="selectImageSource('camera')">Capture from Camera</button>
                <button type="button" class="btn btn-secondary" onclick="selectImageSource('file')">Upload from Gallery</button>
            </div>
        </div>
    </div>
</div>

@push('styles')

<style>
    .upload-area {
    text-align: center;
    border: 2px dashed #007bff;
    padding: 15px;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
}

.upload-area:hover {
    background: rgba(0, 123, 255, 0.1);
}

.imgUploadFile {
    display: flex;
    flex-direction: column;
    align-items: center;
    cursor: pointer;
}

.imgUploadFile input {
    display: none;
}

.preview-img {
    height: 100px;
    width: 150px;
    object-fit: cover;
    border-radius: 8px;
}

#mapPopup {
        display: none; 
        position: fixed; 
        top: 50%; 
        left: 50%; 
        transform: translate(-50%, -50%); 
        width: 80%; 
        max-width: 600px; 
        height: 500px;
        background: white;
        z-index: 1000;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        padding: 10px;
        border-radius: 8px;
    }

    #closePopup {
        position: absolute;
        right: 10px;
        top: 10px;
        background: red;
        color: white;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }

    #map {
        width: 100%;
        height: 90%;
    }

    .pickLocation-wrap {
        display: flex;
        align-items: center;
    }

    .pickLocation-wrap input {
        flex: 1;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .pickLocation-wrap button {
        margin-left: 10px;
        background: #007bff;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 4px;
        cursor: pointer;
    }

</style>

    
@endpush

@push('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkZVirWJryp0GyWKClqPlLJ1oy8ftxMJM&libraries=places"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  
   function chooseUploadMethod(id) {
        Swal.fire({
            title: "Select Upload Method",
            text: "Choose how you want to upload the image.",
            icon: "question",
            showCancelButton: true,
            confirmButtonText: "Use Camera",
            cancelButtonText: "Choose from Gallery",
        }).then((result) => {
            let input = document.getElementById(id);

            if (result.isConfirmed) {
                // Camera mode
                input.setAttribute("capture", "environment");
            } else {
                // Gallery mode
                input.removeAttribute("capture");
            }

            // Trigger file selection
            input.click();
        });
    }


    function previewImage(event, previewId) {
        let reader = new FileReader();
        reader.onload = function () {
            let preview = document.getElementById(previewId);
            preview.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }

    $(document).on('submit', '#providerForm', function(e) {
        e.preventDefault();
        $('#providerForm').addClass('was-validated');
        if ($('#providerForm')[0].checkValidity() === false) {
            event.stopPropagation();
        } else {
            this.submit();
        }
    });


    window.initMap = function () {
        geocoder = new google.maps.Geocoder();
        const defaultLocation = { lat: 28.6139, lng: 77.2090 }; // Default to New Delhi

        map = new google.maps.Map(document.getElementById("map"), {
            center: defaultLocation,
            zoom: 12,
        });

        marker = new google.maps.Marker({
            position: defaultLocation,
            map: map,
            draggable: true,
        });

        marker.addListener("dragend", function () {
            getAddressFromCoordinates(marker.getPosition());
        });

        map.addListener("click", function (event) {
            marker.setPosition(event.latLng);
            getAddressFromCoordinates(event.latLng);
        });
    };

    function getAddressFromCoordinates(latlng) {
        geocoder.geocode({ location: latlng }, function (results, status) {
            if (status === "OK" && results[0]) {
                document.getElementById("address").value = results[0].formatted_address;
                document.getElementById("mapPopup").style.display = "none"; // Close popup after selection
            } else {
                alert("No address found!");
            }
        });
    }

    // document.getElementById("pickLocation").addEventListener("click", function (event) {
    //     event.preventDefault();
    //     document.getElementById("mapPopup").style.display = "block";
    //     if (!map) {
    //         window.initMap(); // Call the function
    //     }
    // });

    document.getElementById("closePopup").addEventListener("click", function (event) {
        event.preventDefault();
        document.getElementById("mapPopup").style.display = "none";
    });

    function getAddressFromCoordinates(latlng) {
        geocoder.geocode({ location: latlng }, function (results, status) {
            if (status === "OK" && results[0]) {
                document.getElementById("address").value = results[0].formatted_address;
                document.getElementById("mapPopup").style.display = "none"; // Close popup after selection
            } else {
                alert("No address found!");
            }
        });
    }

</script>
    
@endpush

</x-app-layout>