<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Biodata;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'nama_lengkap' => 'Rahmat Dani S',
            'email' => 'rahmatdani@gmail.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'nama_lengkap' => 'Anjay',
            'email' => 'rahmatdanisyw@gmail.com',
            'password' => Hash::make('password')
        ]);

        Biodata::create([
            'user_id' => 1,
            'nisn' => '544211311',
            'name' => 'Rahmat Dani S',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'jalan kacong dg lalang no 109',
            'foto' => 'dani.jpg',
            'tempat_lahir' => 'Ujung Pandang',
            'tanggal_lahir' => date('Y-m-d H:i:s'),
            'no_hp' => '081354821720',
            'provinsi' => 'Sulawesi Selatan',
            'kabupaten' => 'Kab. Gowa',
            'kecamatan' => 'Somba Opu',
            'asal_sekolah' => 'SMK Handayani Sungguminasa',
            'alamat_sekolah' => 'jln agus salim',
            'mtk' => 100,
            'mtk1' => 100,
            'ipa' => 100,
            'ipa1' => 100,
            'b_ing' => 100,
            'b_ing1' => 100,
            'jalur' => 'Prestasi Khusus',
            'jurusan1' => 'Rekayasa Perangkat Lunak',
            'Jurusan2' => 'Teknik Komputer dan Jaringan',
            'hp_ortu' => '081241525485',
            'agama' => 'Islam'
        ]);

        Biodata::create([
            'user_id' => 2,
            'nisn' => '12345678',
            'name' => 'Dani',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'jalan kacong dg lalang no 109',
            'foto' => 'dani.jpg',
            'tempat_lahir' => 'Ujung Pandang',
            'tanggal_lahir' => date('Y-m-d H:i:s'),
            'no_hp' => '081354821720',
            'provinsi' => 'Sulawesi Selatan',
            'kabupaten' => 'Kab. Gowa',
            'kecamatan' => 'Somba Opu',
            'asal_sekolah' => 'SMK Handayani Sungguminasa',
            'alamat_sekolah' => 'jln agus salim',
            'mtk' => 100,
            'mtk1' => 100,
            'ipa' => 100,
            'ipa1' => 100,
            'b_ing' => 100,
            'b_ing1' => 100,
            'jalur' => 'Prestasi Khusus',
            'jurusan1' => 'Rekayasa Perangkat Lunak',
            'Jurusan2' => 'Teknik Komputer dan Jaringan',
            'hp_ortu' => '081241525485',
            'agama' => 'Islam'
        ]);
    }
}
