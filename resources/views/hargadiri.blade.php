@extends('layouts.app')

@section('content')
<section class="max-w-xl mx-auto px-4 py-12">

    <div class="bg-white rounded-xl shadow-sm p-6">

        {{-- Progress --}}
        <div class="mb-6">
            <div class="w-full bg-gray-200 rounded-full h-2">
                <div id="progressBar"
                     class="bg-pink-600 h-2 rounded-full transition-all duration-300"
                     style="width: 0%">
                </div>
            </div>
            <p class="text-sm text-gray-500 mt-2 text-center">
                Pertanyaan <span id="current">1</span> dari 10
            </p>
        </div>

        {{-- Question --}}
        <h2 id="question" class="text-lg font-semibold mb-6">—</h2>

        {{-- Answers --}}
        <div id="answers" class="space-y-3"></div>

        {{-- Info --}}
        <div class="mt-6 bg-pink-50 border border-pink-200 text-pink-800 p-4 rounded-lg text-sm">
            Jawablah sejujur mungkin sesuai perasaan kamu saat ini.
        </div>

    </div>

</section>

<script src="/js/hargadiri.js"></script>
@endsection
