<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\customer;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'identifier' => 'anto@gmail.com',
                'provider' => 'Email',
                'created' => '2023-03-30',
                'signed_in' => '2023-04-13',
                'user_uid' => 'AN01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'identifier' => 'dono@gmail.com',
                'provider' => 'Email',
                'created' => '2022-12-10',
                'signed_in' => '2023-05-12',
                'user_uid' => 'DN01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'identifier' => 'budi@gmail.com',
                'provider' => 'Email',
                'created' => '2023-01-15',
                'signed_in' => '2023-06-01',
                'user_uid' => 'BR02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'identifier' => 'citra@gmail.com',
                'provider' => 'Email',
                'created' => '2022-11-25',
                'signed_in' => '2023-06-15',
                'user_uid' => 'CL03',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'identifier' => 'desta@gmail.com',
                'provider' => 'Email',
                'created' => '2023-02-28',
                'signed_in' => '2023-07-20',
                'user_uid' => 'DS04',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'identifier' => 'eris@gmail.com',
                'provider' => 'Email',
                'created' => '2022-10-05',
                'signed_in' => '2023-08-10',
                'user_uid' => 'ER05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'identifier' => 'ferry@gmail.com',
                'provider' => 'Email',
                'created' => '2023-03-03',
                'signed_in' => '2023-09-01',
                'user_uid' => 'FR06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'identifier' => 'gita@gmail.com',
                'provider' => 'Email',
                'created' => '2022-12-22',
                'signed_in' => '2023-10-05',
                'user_uid' => 'GR07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'identifier' => 'herman@gmail.com',
                'provider' => 'Email',
                'created' => '2023-01-08',
                'signed_in' => '2023-11-15',
                'user_uid' => 'HR08',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'identifier' => 'irma@gmail.com',
                'provider' => 'Email',
                'created' => '2022-09-19',
                'signed_in' => '2023-12-01',
                'user_uid' => 'IR09',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
