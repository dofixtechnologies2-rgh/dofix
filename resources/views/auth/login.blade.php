
<x-admin-guest-layout>
@section('title', 'Admin Login')
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image" style="padding: 6rem;">
                        <img src="{{ asset('admin/img/logo.png') }}" class="img-fluid">
                    </div>
               
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>
                       
                            <form class="user" id="login_form" action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="email" required name="email" class="form-control form-control-user"
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="Enter Email Address...">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password"  required name="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Password">
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" name="remember" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember
                                            Me</label>
                                    </div>
                                </div>
                        
                                <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                
                            </form>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script>
    $(document).ready(function() {
        $('#login_form').validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                    maxlength: 50
                },
                password: {
                    minlength: 8,
                    required: true
                },
            },
            messages: {
                email: {
                        required: "Please enter a email",
                        email: "Please enter valid email",
                        maxlength: "Email cannot be more than 50 characters,Please enter valid email",
                    },
                    password: {
                        required: "Please enter password",
                        minlength: "Password must be at least 8 characters,Please enter valid password"
                    },
                },
            // highlight: function(element) {
            //     $(element).addClass('error');
            //     $(element).css("border", " 1px solid red")
            // }
        });
    });
 

</script>
@endpush

</x-admin-guest-layout>