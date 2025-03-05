@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Đặt vé xem phim</h2>

    {{-- Hiển thị thông báo lỗi nếu có --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form đặt vé --}}
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="movie_id" class="form-label">Chọn phim:</label>
            <select name="movie_id" id="movie_id" class="form-control" required>
                <option value="">-- Chọn phim --</option>
                @foreach ($movies as $movie)
                    <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="cinema_id" class="form-label">Chọn rạp:</label>
            <select name="cinema_id" id="cinema_id" class="form-control" required>
                <option value="">-- Chọn rạp --</option>
                @foreach ($cinemas as $cinema)
                    <option value="{{ $cinema->id }}">{{ $cinema->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="ticket_id" class="form-label">Chọn loại vé:</label>
            <select name="ticket_id" id="ticket_id" class="form-control" required>
                <option value="">-- Chọn loại vé --</option>
                @foreach ($tickets as $ticket)
                <option value="{{ $ticket->id }}" data-price="{{ $ticket->price }}">
                    {{ $ticket->type }} - {{ number_format($ticket->price, 0, ',', '.') }} VND
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Số lượng vé:</label>
            <input type="number" name="quantity" id="quantity" class="form-control" min="1" value="1" required>
        </div>

        <button type="submit" class="btn btn-primary">Xác nhận đặt vé</button>
        <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
