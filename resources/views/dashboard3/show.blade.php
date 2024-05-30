<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Product</title>
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
      border-radius: 5px;
      border: 1px solid #ced4da;
      padding: 8px;
    }
    .form-control[readonly] {
      background-color: #e9ecef;
    }
    .row {
      margin-bottom: 20px;
    }
    .card {
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .card-body {
      padding: 20px;
    }
    .card-img-top {
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;
      max-width: 100%;
      height: auto;
      max-height: 300px; /* Maximum height to prevent oversized images */
      object-fit: cover; /* Ensure the image covers the area nicely */
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="mb-0">Detail Product</h1>
    <hr>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{ $femme->name }}</h5>
        <p class="card-text">Price: ${{ $femme->price }}</p>
        <!-- Display the image if it exists -->
        @if ($femme->image)
          <img src="{{ asset('images/' . $femme->image) }}" alt="{{ $femme->name }}" class="card-img-top mb-3">
        @else
          <p>No image available</p>
        @endif
        <div class="row">
          <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" value="{{ $femme->created_at }}" readonly>
          </div>
          <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" value="{{ $femme->updated_at }}" readonly>
          </div>
        </div>
      </div>
    </div>
    <a href="{{ route('dashboard3.liste_femme') }}" class="btn btn-primary mt-3">Back to List</a>
  </div>
</body>
</html>
