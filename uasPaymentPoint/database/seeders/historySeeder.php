<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\history;

class historySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('histories')->insert([
            [
                'cust_id' => 'DN01',
                'email' => 'dono@gmail.com',
                'type' => 'PLN',
                'price' => 30000,
                'status' => 'Success',
                'paymentMethod' => 'Virtual Account',
                'date' => '2024-01-11',
                'refNo' => 'd79b7b03-345d-414a-a108-e437b4b39a2d',
                'bulan' => 'Januari',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'AN01',
                'email' => 'anto@gmail.com',
                'type' => 'PBB',
                'price' => 150000,
                'status' => 'Success',
                'paymentMethod' => 'Bank Transfer',
                'date' => '2024-11-11',
                'refNo' => 'e89b8a04-555d-123a-c098-d439c6b49d2e',
                'bulan' => 'November',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'BR02',
                'email' => 'budi@gmail.com',
                'type' => 'PDAM',
                'price' => 125000,
                'status' => 'Success',
                'paymentMethod' => 'Dana',
                'date' => '2024-02-14',
                'refNo' => 'b34c7e04-223d-789a-a907-b234c6b91e5f',
                'bulan' => 'Februari',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'CL03',
                'email' => 'citra@gmail.com',
                'type' => 'PLN',
                'price' => 75000,
                'status' => 'Success',
                'paymentMethod' => 'Virtual Account',
                'date' => '2024-07-27',
                'refNo' => 'c56e8f03-345d-901c-b209-c456f7c82d7a',
                'bulan' => 'Juli',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'DS04',
                'email' => 'desta@gmail.com',
                'type' => 'PBB',
                'price' => 50000,
                'status' => 'Success',
                'paymentMethod' => 'Bank Transfer',
                'date' => '2024-05-16',
                'refNo' => 'd67f9d02-890e-511d-e308-d763f1f91h21',
                'bulan' => 'Mei',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'ER05',
                'email' => 'eris@gmail.com',
                'type' => 'PDAM',
                'price' => 45000,
                'status' => 'Success',
                'paymentMethod' => 'OVO',
                'date' => '2024-07-08',
                'refNo' => 'e78f9b01-456d-308a-d109-e543g5f78c7b',
                'bulan' => 'Juli',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'FR06',
                'email' => 'ferry@gmail.com',
                'type' => 'PBB',
                'price' => 100000,
                'status' => 'Fail',
                'paymentMethod' => 'Dana',
                'date' => '2024-08-09',
                'refNo' => 'f90a8c04-789d-407b-d208-f832g8f81f3c',
                'bulan' => 'Agustus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'GR07',
                'email' => 'gita@gmail.com',
                'type' => 'PLN',
                'price' => 200000,
                'status' => 'Fail',
                'paymentMethod' => 'Virtual Account',
                'date' => '2024-06-30',
                'refNo' => 'g45d7c06-890e-512c-e407-g763f2g91j33',
                'bulan' => 'Juni',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'HR08',
                'email' => 'herman@gmail.com',
                'type' => 'PDAM',
                'price' => 60000,
                'status' => 'Success',
                'paymentMethod' => 'Ovo',
                'date' => '2024-05-29',
                'refNo' => 'h89f6e03-123f-613d-f508-h987i3f92k20',
                'bulan' => 'Mei',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'IR09',
                'email' => 'irma@gmail.com',
                'type' => 'PBB',
                'price' => 250000,
                'status' => 'Fail',
                'paymentMethod' => 'Dana',
                'date' => '2024-01-18',
                'refNo' => 'i56g8f05-901f-713e-f906-i987k2g92k33',
                'bulan' => 'Januari',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
