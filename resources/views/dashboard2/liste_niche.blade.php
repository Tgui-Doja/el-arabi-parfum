<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parfum-Niche</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
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
}

.btn-primary,
.btn-info,
.btn-danger {
    border-radius: 20px;
}

.table {
    margin-top: 20px;
}

.table th {
    font-weight: bold;
    background-color: #007bff;
    color: white;
}

.table tbody tr {
    border-bottom: 1px solid #dee2e6;
}

.table tbody tr:hover {
    background-color: #f0f0f0;
}

.btn-info,
.btn-danger {
    padding: 0.375rem 0.75rem;
    font-size: 0.875rem;
}

.alert {
    margin-top: 20px;
}

.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
}

.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
}

.form-label {
    font-weight: bold;
}

.form-control[readonly] {
    background-color: #f8f9fa;
    border: none;
    box-shadow: none;
    color: #212529;
}


    </style>
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <h1>Parfum-Niche</h1>
        <hr>
        <a href="{{ route('dashboard2.create') }}" class="btn btn-primary">Add Product</a>
        <hr>
        @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
        @endif
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        @if (Session::has('success'))
        <div class="alert alert-success">
        {{ Session::get('success') }}
        </div>
        @endif
        <table class="table">
          <thead>
            <tr>
              <th>id</th>
              <th>name</th>
              <th>image</th>
              <th>price</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            @if($niches->count() > 0)
              @php $ide = 1; @endphp
              @foreach ($niches as $niche)
                <tr>
                  <td class="align-middle">{{ $ide }}</td>
                  <td class="align-middle">{{ $niche->name }}</td>
                  <td class="align-middle">
                    <img src="{{asset('images')}}/{{$niche->image}}" alt="{{ $niche->name }}" class="img img-responsive" style="max-width: 100px;">
                  </td>
                  <td class="align-middle">{{ $niche->price }}</td>
                  <td class="align-middle">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="{{ route('dashboard2.show', $niche->id) }}" type="button" class="btn btn-secondary">detail</a>
                      <a href="{{ route('dashboard2.edit', $niche->id) }}" type="button" class="btn btn-warning">edit</a>
                      <form action="{{ route('dashboard2.destroy', $niche->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Really you want to delete?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">delete</button>
                      </form>
                    </div>
                  </td>
                </tr>
                @php $ide++; @endphp
              @endforeach
            @else
              <tr>
                <td class="text-center" colspan="6">Product not found</td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
