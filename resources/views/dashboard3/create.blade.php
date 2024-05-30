<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Parfum-Women</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }
    .container {
      margin-top: 50px;
    }
    h1 {
      color: #007bff;
      font-size: 2rem;
      margin-bottom: 20px;
    }
    .form-label {
      font-weight: bold;
    }
    .form-control {
      border-radius: 8px;
      border: 1px solid #ced4da;
    }
    .form-control:focus {
      border-color: #007bff;
      box-shadow: none;
    }
    .btn-warning {
      border-radius: 20px;
      padding: 10px 30px;
      font-weight: bold;
    }
    .btn-warning:hover {
      background-color: #ffc107;
      border-color: #ffc107;
    }
  </style>
</head>
<body>
  <div class="container form-container">
    <h1 class="mb-0">Add Parfum-Women</h1>
    <hr>
    <form action="{{ route('dashboard3.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="file" name="image" class="form-control" placeholder="Image" required>
            </div>
            <div class="col">
                <input type="number" name="price" class="form-control" placeholder="Price" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button class="btn btn-primary w-100">Submit</button>
            </div>
        </div>
    </form>
    
    <!-- Display the uploaded image if it exists -->
    @if (isset($femme) && $femme->image)
        <div class="row mt-3">
            <div class="col">
                <img src="{{ asset('images/' . $femme->image) }}" alt="{{ $femme->name }}" class="card-img-top">
            </div>
        </div>
    @endif
  </div>
</body>
</html>
