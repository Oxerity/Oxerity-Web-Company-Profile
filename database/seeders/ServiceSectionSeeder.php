<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceSection;

class ServiceSectionSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'icon' => '<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9V3m0 18a9 9 0 009-9m-9 9a9 9 0 00-9-9">
                                </path>
                            </svg>',
                'title' => 'Digitalisasi UMKM',
                'description' => 'Solusi lengkap untuk membawa bisnis Anda online, mulai dari pembuatan website, toko online, hingga integrasi sistem pembayaran digital.',
                'features' => [
                    'Website Professional',
                    'E-Commerce Platform',
                    'Payment Gateway',
                ],
                'order' => 1,
            ],
            [
                'icon' => '<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>',
                'title' => 'Pemberdayaan Digital',
                'description' => 'Pelatihan dan pendampingan komprehensif untuk meningkatkan literasi digital, strategi marketing, dan manajemen bisnis modern.',
                'features' => [
                    'Digital Marketing Training',
                    'Business Mentoring',
                    'Social Media Strategy',
                ],
                'order' => 2,
            ],
            [
                'icon' => '<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>',
                'title' => 'Analitik & Strategi',
                'description' => 'Manfaatkan kekuatan data untuk pertumbuhan bisnis. Kami menyediakan layanan analitik mendalam untuk keputusan yang lebih tepat.',
                'features' => [
                    'Business Analytics',
                    'Market Research',
                    'Performance Tracking',
                ],
                'order' => 3,
            ],
        ];

        foreach ($services as $service) {
            ServiceSection::create($service);
        }
    }
}
