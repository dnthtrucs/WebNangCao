@extends('layouts.app')

@section('content')
    <h2>Đặt vé xem phim</h2>
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="movie_id">Chọn phim:</label>
            <select name="movie_id" class="form-control">
                @foreach ($movies as $movie)
                    <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="cinema_id">Chọn rạp:</label>
            <select name="cinema_id" class="form-control">
                @foreach ($cinemas as $cinema)
                    <option value="{{ $cinema->id }}">{{ $cinema->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="ticket_id">Chọn loại vé:</label>
            <select name="ticket_id" class="form-control">
                @foreach ($tickets as $ticket)
                    <option value="{{ $ticket->id }}">{{ $ticket->type }} - {{ number_format($ticket->price, 0, ',', '.') }} VND</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="quantity">Số lượng vé:</label>
            <input type="number" name="quantity" class="form-control" min="1" required>
        </div>

        <button type="submit" class="btn btn-success">Đặt vé</button>
    </form>
@endsection
