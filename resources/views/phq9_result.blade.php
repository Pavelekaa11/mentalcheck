@extends('layouts.app')

@section('content')
<section class="max-w-xl mx-auto px-4 py-12">

    <div class="bg-white rounded-xl shadow-sm p-6 text-center">

        <h1 class="text-2xl font-bold mb-4">
            Hasil Tes Depresi
        </h1>

        <p class="text-gray-500 mb-6">
            Skor PHQ-9 kamu:
        </p>

        <div id="score" class="text-5xl font-bold text-blue-600 mb-4">
            0
        </div>

        <div id="level" class="text-lg font-semibold mb-6">
            —
        </div>

        <p id="description" class="text-gray-700 mb-8">
            —
        </p>

        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 text-sm text-yellow-800 mb-8">
            ⚠️ Tes ini <strong>bukan diagnosis medis</strong>.  
            Jika kamu merasa terganggu secara emosional atau memiliki pikiran menyakiti diri, sangat disarankan untuk mencari bantuan profesional.
        </div>

        <a href="/" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-lg">
            Kembali ke Beranda
        </a>

    </div>

</section>

<script src="/js/phq9_result.js"></script>
@endsection
