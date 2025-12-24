<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Enquiry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            background-color: #486fdb;
            color: #fff;
            padding: 10px 0;
            border-radius: 8px 8px 0 0;
        }

        h1 {
            margin: 0;
            font-size: 24px;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin: 10px 0;
            font-size: 14px;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #888;
            margin-top: 20px;
        }

        .highlight {
            font-weight: bold;
        }

        .enquiry-details {
            background-color: #f1f1f1;
            padding: 15px;
            border-radius: 5px;
        }

        .date-time {
            font-size: 14px;
            color: #555;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="header">
            <h1>Thank You for Your Enquiry, {{ $enquiry->name }}!</h1>
        </div>
        <div class="body">
            <p>We have received your enquiry and will get back to you as soon as possible.</p>
            
            <h3>Enquiry Details:</h3>
            <div class="enquiry-details">
                <ul>
                    <li><span class="highlight">Mobile Number:</span> {{ $enquiry->mobile_number }}</li>
                    <li><span class="highlight">Email:</span> {{ $enquiry->email }}</li>
                    <li><span class="highlight">Service Name:</span> {{ $service ? $service->name : 'N/A' }}</li>
                    <li><span class="highlight">Message:</span> {{ $enquiry->message }}</li>
                </ul>
                <p class="date-time">
                    <strong>Date:</strong> {{ \Carbon\Carbon::parse($enquiry->date)->format('F d, Y') }} <br>
                    <strong>Time:</strong> {{ \Carbon\Carbon::parse($enquiry->time)->format('g:i A') }}
                </p>
            </div>
        </div>
        <div class="footer">
            <p>Thank you for reaching out to us. We will respond shortly!</p>
        </div>
    </div>

</body>

</html>
