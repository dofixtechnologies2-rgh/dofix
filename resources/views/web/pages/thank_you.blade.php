<x-app-layout>
    @section('title', 'Thank You')

    <div class="thank-you-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="thank-you">
                        <h1>Thank You for Your Booking!</h1>
              <h2>We have received your booking request successfully.</h2>
             <h2>Our team will reach out to you between 10:00 AM to 6:30 PM during working hours.</h2>

              <p>You can expect a callback within 2 hours.</p>

                <p>We look forward to serving you!</p>

                    <p>If you need immediate assistance, feel free to contact our support team.</p>
            
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
    <style>
        .thank-you {
            background-position: bottom center !important;
            height: 500px;
            background-size: contain !important;
            background-repeat: no-repeat !important;
            margin: 20px 0;
            text-align: center;
            padding:;
        }

        .thank-you h1 {
            font-size: 60px;
            font-weight: 500;
			color:black;
            margin-top:20%;
            line-height: 70px;
            text-transform: uppercase;
        }

        .thank-you h2 {
            position: relative;
            font-size:30px;
        }

        .thank-you p {

        }

        @media(max-width:767px) {

            .thank-you h1,
            .thank-you span {
                font-size: 30px;
				line-height:70px;
            }

            .thank-you h2 {
                font-size:20px;
            }


            .thank-you p {
                
            }

            .thank-you h1 {
                margin-top: 10%;
            }

            .thank-you {
                background-position: inherit !important;
            }

        }
    </style>
    @endpush

</x-app-layout>