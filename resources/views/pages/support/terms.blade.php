<x-layouts.app>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-24 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-gray-50 via-slate-50 to-zinc-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
            <div class="absolute top-0 -left-10 w-96 h-96 bg-gray-400/10 rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
            <div class="absolute top-20 -right-10 w-96 h-96 bg-zinc-400/10 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <div class="max-w-4xl mx-auto" data-aos="fade-up">
                <div class="inline-block mb-6 px-6 py-2 bg-white/60 dark:bg-gray-800/60 backdrop-blur-xl rounded-full border border-gray-200 dark:border-gray-700 shadow-sm">
                    <span class="text-xs font-black text-gray-500 uppercase tracking-[0.2em]">
                        Legal Compliance
                    </span>
                </div>
                <h1 class="text-6xl md:text-8xl font-black mb-10 leading-[1.1] tracking-tighter text-gray-900 dark:text-white">
                    Syarat & Ketentuan
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 leading-relaxed max-w-2xl mx-auto font-medium">
                    Landasan kerjasama yang transparan untuk menjamin keamanan dan kenyamanan kedua belah pihak.
                </p>
            </div>
        </div>
    </section>

    <!-- Terms Content -->
    <section class="py-32 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div class="bg-gray-50 dark:bg-gray-800/50 p-12 md:p-24 rounded-[4rem] border border-gray-100 dark:border-gray-700 shadow-2xl relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-12 opacity-5 pointer-events-none">
                        <i class="ri-scales-3-line text-[200px]"></i>
                    </div>

                    <div class="relative z-10 prose dark:prose-invert prose-2xl max-w-none prose-headings:font-black prose-headings:tracking-tight prose-headings:text-gray-900 dark:prose-headings:text-white prose-p:text-gray-600 dark:prose-p:text-gray-400 prose-p:leading-relaxed prose-strong:text-gray-900 dark:prose-strong:text-white">
                        <div class="space-y-16">
                            <section>
                                <h3 class="flex items-center gap-4 text-3xl mb-8">
                                    <span class="flex-shrink-0 w-10 h-10 bg-gray-900 dark:bg-white text-white dark:text-gray-900 rounded-lg flex items-center justify-center text-lg font-black">01</span>
                                    Definisi Layanan
                                </h3>
                                <p>Layanan yang disediakan oleh <strong>Oxerity Corp</strong> meliputi namun tidak terbatas pada pengembangan perangkat lunak, desain grafis, pemasaran digital, dan konsultasi IT sesuai dengan perjanjian tertulis yang disepakati.</p>
                            </section>

                            <section>
                                <h3 class="flex items-center gap-4 text-3xl mb-8">
                                    <span class="flex-shrink-0 w-10 h-10 bg-gray-900 dark:bg-white text-white dark:text-gray-900 rounded-lg flex items-center justify-center text-lg font-black">02</span>
                                    Kewajiban Klien
                                </h3>
                                <p>Klien berkewajiban menyediakan seluruh materi pendukung yang diperlukan untuk pengerjaan project secara tepat waktu guna menghindari keterlambatan jadwal yang telah ditentukan.</p>
                            </section>

                            <section>
                                <h3 class="flex items-center gap-4 text-3xl mb-8">
                                    <span class="flex-shrink-0 w-10 h-10 bg-gray-900 dark:bg-white text-white dark:text-gray-900 rounded-lg flex items-center justify-center text-lg font-black">03</span>
                                    Kebijakan Pembayaran
                                </h3>
                                <p>Seluruh pembayaran dilakukan melalui transfer bank ke rekening resmi Oxerity Corp. Tahapan pembayaran terbagi menjadi Deposit (50%) di awal dan Pelunasan (50%) setelah project dinyatakan selesai.</p>
                            </section>

                            <section>
                                <h3 class="flex items-center gap-4 text-3xl mb-8">
                                    <span class="flex-shrink-0 w-10 h-10 bg-gray-900 dark:bg-white text-white dark:text-gray-900 rounded-lg flex items-center justify-center text-lg font-black">04</span>
                                    Penyelesaian Sengketa
                                </h3>
                                <p>Apabila terjadi perselisihan, kedua belah pihak sepakat untuk menyelesaikannya secara musyawarah mufakat terlebih dahulu sebelum menempuh jalur hukum yang berlaku di wilayah hukum Republik Indonesia.</p>
                            </section>
                        </div>

                        <div class="mt-24 pt-12 border-t border-gray-200 dark:border-gray-700 flex flex-col md:flex-row justify-between items-center gap-6">
                            <p class="text-sm font-bold text-gray-400 uppercase tracking-widest">Update Terakhir: April 2026</p>
                            <button onclick="window.print()" class="flex items-center gap-2 text-sm font-black text-blue-600 hover:text-blue-700">
                                <i class="ri-printer-fill text-xl"></i> CETAK DOKUMEN
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Footer -->
    <section class="py-24 bg-gray-50 dark:bg-gray-800/50">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-2xl font-black mb-8">Punya pertanyaan seputar aspek legal?</h2>
            <a href="mailto:legal@oxerity.com" class="inline-flex items-center gap-3 text-lg font-black text-gray-900 dark:text-white border-b-2 border-gray-900 dark:border-white hover:pb-2 transition-all">
                legal@oxerity.com <i class="ri-mail-send-line"></i>
            </a>
        </div>
    </section>
</x-layouts.app>
