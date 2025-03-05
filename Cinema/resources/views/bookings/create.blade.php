@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Đặt vé xem phim</h2>
    <h4>Phim: {{ $showtime->movie->title }}</h4>
    <h5>Rạp: {{ $showtime->cinema->name }}</h5>
    <p>Thời gian chiếu: {{ $showtime->start_time }}</p>

    <form action="{{ route('bookings.store', $showtime->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="ticket_quantity">Số lượng vé:</label>
            <input type="number" name="ticket_quantity" class="form-control" min="1" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Đặt vé</button>
    </form>
</div>
@endsection
