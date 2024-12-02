<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\userInformation;

class userInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_information')->insert([
            [
                'cust_Id' => 'AN01',
                'nama' => 'Anto',
                'email' => 'anto@gmail.com', 
                'alamat' => 'Jl. Permata Hitam',
                'noHp' => '08234327384',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'DN01',
                'nama' => 'Dono',
                'email' => 'dono@gmail.com', 
                'alamat' => 'Jl. Pahlawan',
                'noHp' => '08123456789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'BR02',
                'nama' => 'Budi',
                'email' => 'budi@gmail.com',
                'alamat' => 'Jl. Pelangi',
                'noHp' => '085647382920',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'CL03',
                'nama' => 'Citra',
                'email' => 'citra@gmail.com',
                'alamat' => 'Jl. Anggrek',
                'noHp' => '081223344556',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'DS04',
                'nama' => 'Desta',
                'email' => 'desta@gmail.com',
                'alamat' => 'Jl. Bambu Kuning',
                'noHp' => '082112233445',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'ER05',
                'nama' => 'Eris',
                'email' => 'eris@gmail.com',
                'alamat' => 'Jl. Mawar',
                'noHp' => '081678905432',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'FR06',
                'nama' => 'Ferry',
                'email' => 'ferry@gmail.com',
                'alamat' => 'Jl. Cemara',
                'noHp' => '085624782930',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'GR07',
                'nama' => 'Gita',
                'email' => 'gita@gmail.com',
                'alamat' => 'Jl. Melati',
                'noHp' => '083333333333',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'HR08',
                'nama' => 'Herman',
                'email' => 'herman@gmail.com',
                'alamat' => 'Jl. Kenanga',
                'noHp' => '081244556677',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'IR09',
                'nama' => 'Irma',
                'email' => 'irma@gmail.com',
                'alamat' => 'Jl. Dahlia',
                'noHp' => '085788990011',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'JN10',
                'nama' => 'Jenny',
                'email' => 'jenny@gmail.com',
                'alamat' => 'Jl. Mawar Merah',
                'noHp' => '081234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'KR11',
                'nama' => 'Kristian',
                'email' => 'kristian@gmail.com',
                'alamat' => 'Jl. Melati Putih',
                'noHp' => '082233445566',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'LN12',
                'nama' => 'Lina',
                'email' => 'lina@gmail.com',
                'alamat' => 'Jl. Kayu Manis',
                'noHp' => '083344556677',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'MR13',
                'nama' => 'Mario',
                'email' => 'mario@gmail.com',
                'alamat' => 'Jl. Kamboja',
                'noHp' => '084456789012',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'NI14',
                'nama' => 'Nina',
                'email' => 'nina@gmail.com',
                'alamat' => 'Jl. Merpati',
                'noHp' => '085567890123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cust_id' => 'OL15',
                'nama' => 'Olga',
                'email' => 'olga@gmail.com',
                'alamat' => 'Jl. Kenari',
                'noHp' => '086678901234',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
