<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\Ticket::create([
        'movie_id' => 1,
        'cinema_id' => 1,
        'price' => 100000
    ]);
}

}
