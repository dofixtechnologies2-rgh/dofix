<x-app-layout>
    @section('title', 'Onboard Step-2')

    <section class="sign-up-page bank-details-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="content">
                        <h2 class="main-heading" style="color: #207FA8;">Bank Details</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, nisi at ultricies vehicula, turpis sapien fermentum ligula</p>
                        <form action="{{url('/store-onboard-step-two')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{$id}}">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="name" required placeholder="Account Holder Name*"
                                    name="account_holder_name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="name" required placeholder="Branch Name*" name="branch_name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="number" class="form-control" id="accountNumber" required placeholder="Account Number*"
                                    name="account_number">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="ifsc_code" required
                                    placeholder="IFSC Code*" name="ifsc_code">
                            </div>
                            

                            <div class="col-md-12 mb-3">
                                
                                <div class="uploadprofile">
                                    <label class="form-label">Image of Cancelled Cheque*</label>
                                   <label class="imgUplaodFile" onclick="chooseUploadMethod('uploadFile')"> 
                                    <img id="bank_preview" src="{{asset('web/images/Upload-Image.svg')}}" class="img-fluid preview-img" alt="Upload Image">
                                    Upload Image*
                                   </label>
                                   <input type="file" name="bank_document" id="uploadFile" style="display: none;" accept="image/*" required capture="environment" onchange="previewImage(event, 'bank_preview')">

                                </div>
                            </div>
                            
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-6 d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn px-5">Submit</button>
                                </div>
                            </div>
                       </form>
                        </div>
                    </div>
               
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="image">
                    </div>
                </div>
            </div>
    </section>

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

</style>

    
@endpush

@push('scripts')
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
</script>
    
@endpush


</x-app-layout>