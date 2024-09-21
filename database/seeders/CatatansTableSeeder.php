<?php

namespace Database\Seeders;

use App\Models\catatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatatansTableSeeder extends Seeder
{ public function run()
    {
        catatan::table('catatans')->insert([
            [
                'name' => 'John Doe',
                'nomor_ktp' => '1234567890123456',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '1990-01-01',
                'alamat' => 'Jl. Merdeka No. 1, Jakarta',
                'jenis_kelamin' => 'Laki-laki',
                'golongan_darah' => 'O',
                'pendidikan' => 'S1',
                'jenis_sim' => 'SIM A',
                'tanggal_pengajuan' => '2024-09-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'nomor_ktp' => '6543210987654321',
                'tempat_lahir' => 'Bandung',
                'tanggal_lahir' => '1985-05-15',
                'alamat' => 'Jl. Kebon Kacang No. 2, Bandung',
                'jenis_kelamin' => 'Perempuan',
                'golongan_darah' => 'A',
                'pendidikan' => 'D3',
                'jenis_sim' => 'SIM C',
                'tanggal_pengajuan' => '2024-09-02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan lebih banyak data jika diperlukan
        ]);
    }
}
