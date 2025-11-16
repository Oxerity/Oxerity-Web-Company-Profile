<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StatSection;

class StatSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => '500+',
                'subtitle' => 'UMKM Terbantu',
                'order' => 1,
            ],
            [
                'title' => '98%',
                'subtitle' => 'Tingkat Kepuasan',
                'order' => 2,
            ],
            [
                'title' => '50+',
                'subtitle' => 'Kota di Indonesia',
                'order' => 3,
            ],
            [
                'title' => '24/7',
                'subtitle' => 'Dukungan Pelanggan',
                'order' => 4,
            ],
        ];

        foreach ($data as $item) {
            StatSection::create($item);
        }
    }
}
