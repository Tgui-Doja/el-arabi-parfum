{{-- edit_reservation.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Edit Reservation</h2>
            <form action="/update_reservations/traitement" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $reservation->id }}">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $reservation->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $reservation->email }}">
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $reservation->phone }}">
                </div>
                <div class="form-group">
                    <label for="product_name">Product Name:</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $reservation->product_name }}">
                </div>
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ $reservation->date }}">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" name="message">{{ $reservation->message }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update Reservation</button>
            </form>
        </div>
    </div>
</div>
@endsection
