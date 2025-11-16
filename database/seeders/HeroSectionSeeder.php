<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HeroSection;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HeroSection::create([
            'badge_text' => '🚀 Solusi Digital untuk UMKM',
            'title_primary' => 'Membawa UMKM',
            'title_secondary' => 'ke Era Digital',
            'description' => 'Transformasi digital yang mudah dan terjangkau. Kami membantu UMKM berkembang melalui teknologi inovatif dan pendampingan berkelanjutan.',
            'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop',
        ]);
    }
}
