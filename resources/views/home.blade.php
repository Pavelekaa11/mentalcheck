@extends('layouts.app')

@section('content')
    {{-- HERO SECTION --}}
    <section class="relative bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 overflow-hidden">
        {{-- Decorative Elements --}}
        <div class="absolute top-0 right-0 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
        
        <div class="max-w-6xl mx-auto px-4 py-20 md:py-28 text-center relative z-10">
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 bg-white/80 backdrop-blur-sm px-4 py-2 rounded-full text-sm text-gray-700 mb-6 shadow-sm">
                <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                Gratis, Anonim & Terpercaya
            </div>

            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent leading-tight">
                Kesehatan Mental<br>Kamu Itu Penting
            </h2>

            <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto mb-10 leading-relaxed">
                Kenali kondisi emosional dan psikologis kamu dengan tes berbasis ilmiah. 
                Langkah pertama menuju kehidupan yang lebih baik.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="/tes/phq9"
                   class="group inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white px-8 py-4 rounded-xl font-medium shadow-lg shadow-blue-600/30 hover:shadow-xl hover:shadow-blue-600/40 hover:-translate-y-0.5 transition-all duration-200">
                    Mulai Tes Sekarang
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
                <a href="#tests"
                   class="inline-flex items-center gap-2 bg-white text-gray-700 px-8 py-4 rounded-xl font-medium shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-200">
                    Lihat Semua Tes
                </a>
            </div>

            {{-- Stats --}}
            <div class="grid grid-cols-3 gap-8 max-w-3xl mx-auto mt-16 pt-16 border-t border-gray-200">
                <div>
                    <div class="text-3xl md:text-4xl font-bold text-blue-600 mb-1">100%</div>
                    <div class="text-sm text-gray-600">Gratis</div>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-bold text-purple-600 mb-1">5 mnt</div>
                    <div class="text-sm text-gray-600">Selesai</div>
                </div>
                <div>
                    <div class="text-3xl md:text-4xl font-bold text-indigo-600 mb-1">6</div>
                    <div class="text-sm text-gray-600">Jenis Tes</div>
                </div>
            </div>
        </div>
    </section>

    {{-- TESTS SECTION --}}
    <section id="tests" class="max-w-6xl mx-auto px-4 py-20">
        <div class="text-center mb-12">
            <h3 class="text-3xl md:text-4xl font-bold mb-4">
                Pilih Tes yang Sesuai
            </h3>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Setiap tes dirancang dengan instrumen yang telah tervalidasi secara klinis
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- Tes Depresi - Active --}}
            <div class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl border-2 border-blue-100 hover:border-blue-300 transition-all duration-300 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500"></div>
                
                <div class="relative z-10">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">
                        Tes Depresi
                    </h4>
                    <p class="text-sm text-gray-600 mb-4 leading-relaxed">
                        Menggunakan PHQ-9 untuk mengukur tingkat depresi dan gejala yang dialami.
                    </p>
                    
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-500 flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            5 menit
                        </span>
                        <a href="/tes/phq9"
                        class="inline-flex items-center gap-1 text-blue-600 font-semibold text-sm group-hover:gap-2 transition-all">
                            Mulai tes
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Tes Kecemasan - Active --}}
            <div class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl border-2 border-purple-100 hover:border-purple-300 transition-all duration-300 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-purple-50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500"></div>
                
                <div class="relative z-10">
                    <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                    </div>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">
                        Tes Kecemasan
                    </h4>
                    <p class="text-sm text-gray-600 mb-4 leading-relaxed">
                        Menggunakan GAD-7 untuk mengukur tingkat kecemasan umum.
                    </p>
                    
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-500 flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            5 menit
                        </span>
                        <a href="/tes/gad7"
                        class="inline-flex items-center gap-1 text-purple-600 font-semibold text-sm group-hover:gap-2 transition-all">
                            Mulai tes
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Tes Stres - Active --}}
            <div class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl border-2 border-red-100 hover:border-red-300 transition-all duration-300 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-red-50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500"></div>
                
                <div class="relative z-10">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">
                        Tes Stres
                    </h4>
                    <p class="text-sm text-gray-600 mb-4 leading-relaxed">
                        Menggunakan PSS-10 untuk mengukur tingkat stres yang dialami.
                    </p>
                    
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-500 flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            5 menit
                        </span>
                        <a href="/tes/pss10"
                        class="inline-flex items-center gap-1 text-red-600 font-semibold text-sm group-hover:gap-2 transition-all">
                            Mulai tes
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Tes Burnout - Active --}}
            <div class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl border-2 border-orange-100 hover:border-orange-300 transition-all duration-300 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-orange-50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500"></div>
                
                <div class="relative z-10">
                    <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/>
                        </svg>
                    </div>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">
                        Tes Burnout
                    </h4>
                    <p class="text-sm text-gray-600 mb-4 leading-relaxed">
                        Mengukur kelelahan emosional akibat pekerjaan atau studi.
                    </p>
                    
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-500 flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            7 menit
                        </span>
                        <a href="/tes/burnout"
                        class="inline-flex items-center gap-1 text-orange-600 font-semibold text-sm group-hover:gap-2 transition-all">
                            Mulai tes
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Tes Kualitas Tidur - Active --}}
            <div class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl border-2 border-indigo-100 hover:border-indigo-300 transition-all duration-300 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-indigo-50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500"></div>
                
                <div class="relative z-10">
                    <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                        </svg>
                    </div>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">
                        Tes Kualitas Tidur
                    </h4>
                    <p class="text-sm text-gray-600 mb-4 leading-relaxed">
                        Mengukur kualitas tidur dan gangguan tidur yang dialami.
                    </p>
                    
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-500 flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            6 menit
                        </span>
                        <a href="/tes/tidur"
                        class="inline-flex items-center gap-1 text-indigo-600 font-semibold text-sm group-hover:gap-2 transition-all">
                            Mulai tes
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Tes Harga Diri - Active --}}
            <div class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl border-2 border-pink-100 hover:border-pink-300 transition-all duration-300 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-pink-50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-500"></div>
                
                <div class="relative z-10">
                    <div class="w-12 h-12 bg-pink-100 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>

                    <h4 class="font-bold text-xl mb-2 text-gray-800">
                        Tes Harga Diri
                    </h4>
                    <p class="text-sm text-gray-600 mb-4 leading-relaxed">
                        Mengukur persepsi dan penilaian terhadap diri sendiri.
                    </p>
                    
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-500 flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            5 menit
                        </span>
                        <a href="/tes/hargadiri"
                        class="inline-flex items-center gap-1 text-pink-600 font-semibold text-sm group-hover:gap-2 transition-all">
                            Mulai tes
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- WHY CHOOSE US --}}
    <section class="bg-gradient-to-br from-blue-600 to-purple-700 text-white py-20">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h3 class="text-3xl md:text-4xl font-bold mb-4">
                    Kenapa Pilih MentalCheck?
                </h3>
                <p class="text-blue-100 max-w-2xl mx-auto">
                    Kami berkomitmen memberikan layanan terbaik untuk kesehatan mental kamu
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl border border-white/20 hover:bg-white/15 transition-all">
                    <div class="w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold mb-2">100% Privasi Terjaga</h4>
                    <p class="text-blue-100 leading-relaxed">
                        Data kamu tidak disimpan di server. Semua hasil hanya tersimpan di perangkat kamu.
                    </p>
                </div>

                <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl border border-white/20 hover:bg-white/15 transition-all">
                    <div class="w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold mb-2">Instrumen Tervalidasi</h4>
                    <p class="text-blue-100 leading-relaxed">
                        Menggunakan PHQ-9, GAD-7, PSS-10 dan instrumen klinis lain yang telah diakui secara internasional.
                    </p>
                </div>

                <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl border border-white/20 hover:bg-white/15 transition-all">
                    <div class="w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center mb-4">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold mb-2">Bukan Diagnosis Pasti</h4>
                    <p class="text-blue-100 leading-relaxed">
                        Hasil tes adalah skrining awal. Konsultasi dengan profesional untuk diagnosis yang akurat.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA SECTION --}}
    <section class="max-w-4xl mx-auto px-4 py-20 text-center">
        <div class="bg-gradient-to-br from-blue-50 to-purple-50 p-12 rounded-3xl border-2 border-blue-100">
            <h3 class="text-3xl md:text-4xl font-bold mb-4">
                Siap Memulai Perjalanan?
            </h3>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                Langkah pertama untuk hidup lebih baik dimulai dengan memahami diri sendiri
            </p>
            <a href="/tes/phq9"
               class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white px-10 py-4 rounded-xl font-medium shadow-xl shadow-blue-600/30 hover:shadow-2xl hover:-translate-y-1 transition-all duration-200">
                Mulai Tes Gratis
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </section>

    {{-- DISCLAIMER --}}
    <section class="max-w-4xl mx-auto px-4 pb-20">
        <div class="bg-amber-50 border border-amber-200 rounded-2xl p-6">
            <div class="flex gap-4">
                <div class="flex-shrink-0">
                    <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                </div>
                <div>
                    <h4 class="font-semibold text-amber-900 mb-1">Disclaimer Penting</h4>
                    <p class="text-sm text-amber-800 leading-relaxed">
                        Tes ini hanya untuk screening awal dan tidak menggantikan diagnosis atau konsultasi profesional. 
                        Jika kamu merasa membutuhkan bantuan, segera hubungi psikolog, psikiater, atau layanan kesehatan mental terdekat.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes blob {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
        }
        .animate-blob {
            animation: blob 7s infinite;
        }
        .animation-delay-2000 {
            animation-delay: 2s;
        }
    </style>
@endsection