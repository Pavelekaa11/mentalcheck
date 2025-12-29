@extends('layouts.app')

@section('content')
    {{-- HERO --}}
    <section class="bg-white">
        <div class="max-w-6xl mx-auto px-4 py-16 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Cek Kesehatan Mental Kamu
            </h2>

            <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                Tes kesehatan mental gratis, anonim, dan cepat untuk membantu kamu
                memahami kondisi emosional dan psikologis kamu saat ini.
            </p>

            <a href="/tes/phq9"
               class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg font-medium hover:bg-blue-700 transition">
                Mulai Tes Depresi
            </a>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-4 py-16">
        <h3 class="text-2xl font-semibold mb-8 text-center">
            Tes yang Tersedia
        </h3>

        <div class="grid md:grid-cols-3 gap-6">
            {{-- Card --}}
            <div class="bg-white p-6 rounded-xl shadow-sm">
                <h4 class="font-semibold text-lg mb-2">
                    Tes Depresi
                </h4>
                <p class="text-sm text-gray-600 mb-4">
                    Menggunakan PHQ-9 untuk mengukur tingkat depresi.
                </p>
                <a href="/tes/phq9"
                   class="text-blue-600 font-medium text-sm">
                    Mulai tes →
                </a>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm opacity-60">
                <h4 class="font-semibold text-lg mb-2">
                    Tes Kecemasan
                </h4>
                <p class="text-sm text-gray-600 mb-4">
                    Menggunakan GAD-7 untuk mengukur kecemasan.
                </p>
                <span class="text-sm text-gray-400">
                    Segera hadir
                </span>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm opacity-60">
                <h4 class="font-semibold text-lg mb-2">
                    Tes Stres
                </h4>
                <p class="text-sm text-gray-600 mb-4">
                    Menggunakan PSS-10 untuk mengukur stres.
                </p>
                <span class="text-sm text-gray-400">
                    Segera hadir
                </span>
            </div>
        </div>
    </section>

    <section class="bg-white py-16">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h3 class="text-2xl font-semibold mb-4">
                Aman, Anonim, dan Berbasis Ilmiah
            </h3>

            <p class="text-gray-600 mb-6">
                Semua tes menggunakan instrumen yang telah banyak digunakan
                dalam penelitian dan praktik klinis.
            </p>

            <div class="grid md:grid-cols-3 gap-6 text-sm">
                <div>
                    🔒 <strong>Privasi Terjaga</strong><br>
                    Data tidak disimpan di server.
                </div>
                <div>
                    📚 <strong>Instrumen Valid</strong><br>
                    PHQ-9, GAD-7, PSS-10.
                </div>
                <div>
                    ⚠️ <strong>Bukan Diagnosis</strong><br>
                    Hanya skrining awal.
                </div>
            </div>
        </div>
    </section>
@endsection


