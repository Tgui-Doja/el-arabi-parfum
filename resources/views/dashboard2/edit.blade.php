<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Parfum-Niche</title>
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
  <div class="container">
    <h1>Edit Parfum-Niche</h1>
    <hr>
    <form action="{{ route('dashboard2.update', $niche->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row mb-3">
        <div class="col">
          <label class="form-label">Name</label>
          <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $niche->name }}" required>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col">
          <label class="form-label">Price</label>
          <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $niche->price }}" required>
        </div>
        <div class="col">
          <label class="form-label">Image</label>
          <input type="file" name="image" class="form-control" placeholder="Image">
        </div>
      </div>
      <!-- Display the current image if it exists -->
      @if ($niche->image)
        <div class="row mb-3">
          <div class="col">
            <img src="{{ asset('images/' . $niche->image) }}" alt="{{ $niche->name }}" class="card-img-top" style="max-width: 100px;">
          </div>
        </div>
      @endif
      <div class="row">
        <div class="col">
          <button class="btn btn-warning">Update</button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>
