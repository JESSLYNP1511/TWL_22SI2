<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_projects')->insert([
            [
                'identifier' => 'UP12345',
                'provider' => 'PDAM',
                'created' => now(), 
                'signed_in' => now(),
                'user_uid' => 'U10001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'identifier' => 'UP54321',
                'provider' => 'PLN',
                'created' => now()->subDays(1),
                'signed_in' => now()->subDays(1),
                'user_uid' => 'U10002',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'identifier' => 'UP67890',
                'provider' => 'PGN',
                'created' => now()->subDays(2),
                'signed_in' => now()->subDays(3),
                'user_uid' => 'U10003',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
    }
}
