@extends('layouts.app')

@section('content')
<section class="max-w-xl mx-auto px-4 sm:px-6 py-8 sm:py-12">

    <div class="bg-white rounded-xl shadow-sm p-6">

        {{-- Progress --}}
        <div class="mb-6">
            <div class="w-full bg-gray-200 rounded-full h-2">
                <div id="progressBar"
                     class="bg-blue-600 h-2 rounded-full transition-all duration-300"
                     style="width: 0%">
                </div>
            </div>
            <p class="text-sm text-gray-500 mt-2 text-center">
                Pertanyaan <span id="current">1</span> dari 6
            </p>
        </div>

        {{-- Question --}}
        <h2 id="question" class="text-lg font-semibold mb-6">—</h2>

        {{-- Answers --}}
        <div id="answers" class="space-y-3"></div>

        {{-- Info --}}
        <div class="mt-6 bg-orange-50 border border-orange-200 text-orange-800 p-4 rounded-lg text-sm">
            Jawablah sesuai dengan kondisi yang paling sering kamu rasakan akhir-akhir ini.
        </div>

    </div>

</section>

<script src="/js/burnout.js"></script>
@endsection
