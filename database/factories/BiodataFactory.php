<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BiodataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
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

            // 'title' => $this->faker->sentence(mt_rand(2,8)),
            // 'slug' => $this->faker->slug(),
            // 'excerpt' => $this->faker->paragraph(),
            // 'body' => $this->faker->paragraph(mt_rand(5,10)),
            // 'user_id' => mt_rand(1,3),
            // 'category_id' => mt_rand(1,3)
        ];
    }
}
