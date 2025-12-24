
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provider Signup Details</title>
</head>
<body>
    <h2>New Provider Signup Details</h2>
    
    <p><strong>Name : </strong> {{ $details['name'] }}</p>
    <p><strong>Company Name : </strong> {{ $details['company_name'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Contact Number :</strong> {{ $details['contact_number'] }}</p>
    <p><strong>Address : </strong> {{ $details['address'] }}</p>

</body>
</html>
