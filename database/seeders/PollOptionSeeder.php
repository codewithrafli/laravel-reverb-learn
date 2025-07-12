<?php

namespace Database\Seeders;

use App\Models\PollOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PollOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PollOption::create(['name' => 'PHP']);
        PollOption::create(['name' => 'JavaScript']);
        PollOption::create(['name' => 'Python']);
        PollOption::create(['name' => 'Java']);
    }
}
