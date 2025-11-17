<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutSection;

class AboutSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutSection::create([
            'badge_text' => 'Tentang Kami',
            'title' => 'Oxerity Corp',
            'description' => "Oxerity Corp lahir dari semangat untuk melihat UMKM di Indonesia naik kelas. Kami percaya bahwa teknologi adalah kunci untuk membuka potensi tak terbatas.\n\nMisi kami adalah menjadi mitra terpercaya bagi para pelaku UMKM dalam perjalanan transformasi digital mereka. Dengan tim yang berpengalaman dan solusi yang disesuaikan, kami berkomitmen untuk memberikan dampak positif yang nyata bagi pertumbuhan ekonomi digital Indonesia.",
            'main_image' => null, // Akan menggunakan fallback image dari Unsplash
            'experience_years' => '5 Tahun',
            'experience_label' => 'Pengalaman',
            'features' => [
                [
                    'title' => 'Tim Profesional',
                    'subtitle' => 'Expert berpengalaman',
                    'icon_type' => 'check-circle',
                    'color' => 'sky',
                ],
                [
                    'title' => 'Solusi Inovatif',
                    'subtitle' => 'Teknologi terkini',
                    'icon_type' => 'lightning-bolt',
                    'color' => 'green',
                ],
            ],
        ]);
    }
}
