<!DOCTYPE html>
<html>
<head>
    <title>New contact Request</title>
</head>
<body>
    <h1>New contact Request</h1>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    {{-- <p><strong>Product Name:</strong> {{ $data['product_name'] }}</p> --}}
    {{-- <p><strong>Date:</strong> {{ $data['date'] }}</p> --}}
    <p><strong>Message:</strong> {{ $data['message'] }}</p>
</body>
</html>
