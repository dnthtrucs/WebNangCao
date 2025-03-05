<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ticket::truncate(); // Xóa dữ liệu cũ để tránh trùng lặp

        Ticket::create([
            'movie_id' => 1,
            'cinema_id' => 1,
            'type' => 'Thường',
            'price' => 100000
        ]);

        Ticket::create([
            'movie_id' => 1,
            'cinema_id' => 1,
            'type' => 'VIP',
            'price' => 150000
        ]);
    }
}
