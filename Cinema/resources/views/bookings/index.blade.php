@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Danh sách vé của bạn</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Phim</th>
                <th>Rạp</th>
                <th>Số lượng vé</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->showtime->movie->title }}</td>
                    <td>{{ $booking->showtime->cinema->name }}</td>
                    <td>{{ $booking->ticket_quantity }}</td>
                    <td>{{ number_format($booking->total_price) }} VND</td>
                    <td>{{ ucfirst($booking->payment_status) }}</td>
                    <td>
                        @if ($booking->payment_status === 'pending')
                            <form action="{{ route('bookings.cancel', $booking->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Hủy</button>
                            </form>
                        @else
                            <span class="text-muted">Không thể hủy</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
