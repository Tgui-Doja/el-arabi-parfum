@extends('layouts.app')

@section('content')
    <h1>Add Reservation</h1>
    <!-- Your form to add a reservation -->
    <form action="/ajouter_reservations/traitement" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <!-- Add more form fields as needed -->
        <button type="submit">Submit</button>
    </form>
@endsection
