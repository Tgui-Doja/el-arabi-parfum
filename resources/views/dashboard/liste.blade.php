<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <style>/* Custom CSS for Dashboard */

      body {
          font-family: Arial, sans-serif; /* Use a common sans-serif font */
          background-color: #f8f9fa; /* Light gray background */
      }
      
      .container {
          margin-top: 50px; /* Add space from the top */
      }
      
      h1 {
          color: #007bff; /* Blue color for heading */
          font-size: 2rem; /* Larger font size for headings */
      }
      
      .btn-primary,
      .btn-info,
      .btn-danger {
          margin-right: 5px; /* Add space between buttons */
          border-radius: 20px; /* Rounded corners for buttons */
      }
      
      .table {
          margin-top: 20px; /* Add space above the table */
      }
      
      /* Hover effect for table rows */
      .table tbody tr:hover {
          background-color: #f0f0f0; /* Light gray background on hover */
      }
      
      /* Style table headers */
      .table th {
          font-weight: bold; /* Bold font for table headers */
          background-color: #007bff; /* Blue background for table headers */
          color: white; /* White text color for table headers */
      }
      
      /* Style table rows */
      .table tbody tr {
          border-bottom: 1px solid #dee2e6; /* Gray border between table rows */
      }
      
      /* Style update and delete buttons */
      .btn-info,
      .btn-danger {
          padding: 0.375rem 0.75rem; /* Add padding to buttons */
          font-size: 0.875rem; /* Reduce font size for buttons */
      }
      </style>
    <div class="container text-center">
        <div class="row">
          <div class="col">
            <h1>Dashboard</h1>
            <hr>
            <a href="/ajouter" class="btn btn-primary">ajouter</a>
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
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>Actions</th>

                    </tr>
                    <tbody>
                      @php
                          $ide = 1;
                      @endphp
                      @foreach ($users as $users)
                        <tr>
                            <td>{{ $ide}}</td>
                            <td>{{$users->name}}</td>
                            <td>{{$users->email}}</td>
                            <td>
                              <a href="/update-user/{{$users->id}}" class="btn btn-info">Update</a>
                              <a href="/delete-user/{{ $users->id}}" class="btn btn-danger"><button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                              </a>
                          </td>
                          
                        </tr>
                        @php
                            $ide += 1;
                        @endphp
                        
                      @endforeach
                    </tbody>
                </thead>
            </table>   
          </div>
        </div>
      </div>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>