<?php

namespace Database\Seeders;

use App\Models\Session;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DrawerSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 5; $i++) {
            Session::create([
                "session_start" => Carbon::now(),
                "session_end" => Carbon::now()->add(1, 'day'),
                "open" => 0
            ]);
        }
    }
}
