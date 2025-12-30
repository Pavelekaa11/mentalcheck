@extends('layouts.app')

@section('content')
<section class="max-w-xl mx-auto px-4 py-12">

    <div class="bg-white p-6 rounded-xl shadow-sm text-center">

        <h2 class="text-2xl font-bold mb-2">
            Hasil Tes Kecemasan
        </h2>

        <p class="text-gray-600 mb-6">
            Berdasarkan kuesioner GAD-7
        </p>

        {{-- Score --}}
        <div id="scoreBox"
             class="rounded-xl p-6 mb-6">
            <p class="text-sm mb-1">Skor kamu</p>
            <p id="score"
               class="text-4xl font-bold">
                —
            </p>
            <p id="level"
               class="mt-2 font-medium">
                —
            </p>
        </div>

        {{-- Description --}}
        <p id="description"
           class="text-gray-700 mb-6">
            —
        </p>

        {{-- Disclaimer --}}
        <div class="bg-yellow-50 border border-yellow-200 text-yellow-800 p-4 rounded-lg text-sm mb-6">
            ⚠️ Hasil ini bukan diagnosis medis. Jika keluhan mengganggu aktivitas harian,
            disarankan berkonsultasi dengan profesional kesehatan mental.
        </div>

        <a href="/"
           class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
            Kembali ke Beranda
        </a>

    </div>

</section>

<script src="/js/gad7_result.js"></script>
@endsection
