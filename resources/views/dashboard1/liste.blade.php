@extends('layouts.app')

@section('content')
    <!-- Your existing dashboard content goes here -->

    <!-- Add this section for managing reservations -->
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Manage Reservations</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Product Name</th>
                            <th>Message</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->id }}</td>
                            <td>{{ $reservation->name }}</td>
                            <td>{{ $reservation->email }}</td>
                            <td>{{ $reservation->phone }}</td>
                            <td>{{ $reservation->product_name }}</td>
                            <td>{{ $reservation->message }}</td>
                            <td>
                                {{-- <a href="{{ route('update_reservations', ['id' => $reservation->id]) }}" class="btn btn-info">Edit</a> --}}
                                <form action="{{ route('delete_reservations', ['id' => $reservation->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this reservation?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <style>
        /* Add your CSS styles here */
        .container {
            /* Example styles */
            margin-top: 20px;
        }

        .table {
            /* Example styles */
            border-collapse: collapse;
            width: 100%;
        }

        .table th, .table td {
            /* Example styles */
            border: 1px solid #ddd;
            padding: 8px;
        }

        .table th {
            /* Example styles */
            background-color: #f2f2f2;
            text-align: left;
        }

        .btn {
            /* Example styles */
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-info {
            /* Example styles */
            background-color: dodgerblue;
            color: white;
        }

        .btn-danger {
            /* Example styles */
            background-color: crimson;
            color: white;
        }

    </style>
@endsection
