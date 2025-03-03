@extends('layouts.app')

@section('content')
    <h2>Danh sách vé đã đặt</h2>
    <a href="{{ route('bookings.create') }}" class="btn btn-primary">Đặt vé mới</a>
    <table class="table">
        <thead>
            <tr>
                <th>Phim</th>
                <th>Rạp</th>
                <th>Loại vé</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->movie->title }}</td>
                    <td>{{ $booking->cinema->name }}</td>
                    <td>{{ $booking->ticket->type }}</td>
                    <td>{{ $booking->quantity }}</td>
                    <td>{{ number_format($booking->total_price, 0, ',', '.') }} VND</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
