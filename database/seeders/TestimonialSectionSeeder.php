<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TestimonialSection;

class TestimonialSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'rating' => 5,
                'message' => 'Oxerity Corp sangat membantu bisnis saya berkembang pesat. Dalam 6 bulan, penjualan online meningkat 300%!',
                'name' => 'Budi Santoso',
                'role' => 'Pemilik Toko Kerajinan',
                'avatar' => null, // default gradient
                'order' => 1,
            ],
            [
                'rating' => 5,
                'message' => 'Tim yang sangat responsif dan profesional. Mereka benar-benar memahami kebutuhan bisnis kami.',
                'name' => 'Siti Rahma',
                'role' => 'Owner Kuliner Online',
                'avatar' => null,
                'order' => 2,
            ],
            [
                'rating' => 5,
                'message' => 'Pelatihan yang diberikan sangat aplikatif. Sekarang saya bisa kelola bisnis digital sendiri dengan percaya diri.',
                'name' => 'Ahmad Rifai',
                'role' => 'Pengusaha Fashion',
                'avatar' => null,
                'order' => 3,
            ],
        ];

        foreach ($data as $item) {
            TestimonialSection::create($item);
        }
    }
}
