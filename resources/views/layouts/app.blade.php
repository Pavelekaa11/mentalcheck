<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Tes Kesehatan Mental' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 overflow-x-hidden">

    {{-- Navbar --}}
    <header class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-md shadow-sm sticky top-0 z-50 border-b border-gray-200 dark:border-gray-700 transition-all duration-300">
        <nav class="max-w-6xl mx-auto px-4 sm:px-6 py-3 sm:py-4">
            <div class="flex justify-between items-center">
                {{-- Logo --}}
                <a href="/" class="flex items-center gap-2 group flex-shrink-0">
                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-blue-600 to-purple-600 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <span class="font-bold text-lg sm:text-xl bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                        MentalCheck
                    </span>
                </a>

                {{-- Desktop Menu --}}
                <div class="hidden md:flex items-center gap-8">
                    <a href="/" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition-colors">
                        Beranda
                    </a>
                    <a href="#tests" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition-colors">
                        Tes
                    </a>
                    <a href="#tentang" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium transition-colors">
                        Tentang
                    </a>
                </div>

                {{-- Right Side Actions --}}
                <div class="flex items-center gap-2 sm:gap-3">
                    {{-- CTA Button --}}
                    <a href="/tes/phq9" 
                       class="hidden sm:inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white px-4 sm:px-6 py-2 sm:py-2.5 rounded-xl text-sm font-medium shadow-lg shadow-blue-600/30 hover:shadow-xl hover:-translate-y-0.5 transition-all duration-200">
                        Mulai Tes
                    </a>

                    {{-- Mobile Menu Toggle --}}
                    <button id="mobile-menu-toggle" 
                            class="md:hidden p-2 rounded-xl hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors flex-shrink-0"
                            aria-label="Toggle menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>

            {{-- Mobile Menu --}}
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4 border-t border-gray-200 dark:border-gray-700 pt-4 animate-fadeIn">
                <div class="flex flex-col gap-3">
                    <a href="/" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium py-2 px-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-all">
                        Beranda
                    </a>
                    <a href="#tests" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium py-2 px-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-all">
                        Tes
                    </a>
                    <a href="#tentang" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 font-medium py-2 px-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-all">
                        Tentang
                    </a>
                    <a href="/tes/phq9" class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-xl font-medium shadow-lg">
                        Mulai Tes
                    </a>
                </div>
            </div>
        </nav>
    </header>

    {{-- Content with fade-in animation --}}
    <main class="animate-fadeIn min-h-screen">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 mt-16 transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-8 sm:py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8 mb-8">
                {{-- Brand --}}
                <div class="sm:col-span-2">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-purple-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                        <span class="font-bold text-xl bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                            MentalCheck
                        </span>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed mb-4">
                        Platform skrining kesehatan mental berbasis ilmiah yang gratis dan anonim. 
                        Membantu kamu memahami kondisi mental dengan lebih baik.
                    </p>
                    <div class="flex items-center gap-2 text-sm">
                        <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse flex-shrink-0"></span>
                        <span class="text-gray-600 dark:text-gray-400">100% Gratis & Anonim</span>
                    </div>
                </div>

                {{-- Quick Links --}}
                <div>
                    <h4 class="font-semibold mb-4 text-gray-900 dark:text-white">Tautan Cepat</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Beranda</a></li>
                        <li><a href="#tests" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Semua Tes</a></li>
                        <li><a href="/tes/phq9" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Tes Depresi</a></li>
                    </ul>
                </div>

                {{-- Resources --}}
                <div>
                    <h4 class="font-semibold mb-4 text-gray-900 dark:text-white">Bantuan</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">FAQ</a></li>
                        <li><a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Privasi</a></li>
                        <li><a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Kontak</a></li>
                    </ul>
                </div>
            </div>

            {{-- Bottom Footer --}}
            <div class="pt-6 sm:pt-8 border-t border-gray-200 dark:border-gray-700">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-gray-500 dark:text-gray-400">
                    <p class="text-center md:text-left text-xs sm:text-sm">
                        © 2024 MentalCheck. Tes ini tidak menggantikan diagnosis profesional.
                    </p>
                    <div class="flex items-center gap-4">
                        <span class="text-xs bg-blue-100 dark:bg-blue-900 text-blue-700 dark:text-blue-300 px-3 py-1 rounded-full whitespace-nowrap">
                            Berbasis PHQ-9, GAD-7, PSS-10
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- Scroll to Top Button --}}
    <button id="scroll-to-top" 
            class="fixed bottom-6 right-6 sm:bottom-8 sm:right-8 bg-gradient-to-r from-blue-600 to-purple-600 text-white p-3 rounded-full shadow-lg opacity-0 invisible hover:scale-110 transition-all duration-300 z-40"
            aria-label="Scroll to top">
        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
        </svg>
    </button>

    {{-- Custom Styles --}}
    <style>
        /* Prevent horizontal scroll */
        body {
            overflow-x: hidden;
            width: 100%;
            max-width: 100vw;
        }

        /* Ensure all elements stay within viewport */
        * {
            max-width: 100%;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeIn {
            animation: fadeIn 0.6s ease-out;
        }

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

        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        @media (min-width: 768px) {
            ::-webkit-scrollbar {
                width: 10px;
            }
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .dark ::-webkit-scrollbar-track {
            background: #1f2937;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #2563eb, #9333ea);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to bottom, #1d4ed8, #7e22ce);
        }

        /* Mobile optimization */
        @media (max-width: 640px) {
            /* Prevent text overflow */
            p, span, a, div {
                word-wrap: break-word;
                overflow-wrap: break-word;
            }
            
            /* Ensure containers don't overflow */
            .container, section, main {
                overflow-x: hidden;
            }
        }
    </style>

    {{-- JavaScript for Dark Mode & Interactions --}}
    <script>
        // Mobile Menu Toggle
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuToggle && mobileMenu) {
            mobileMenuToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Scroll to Top Button
        const scrollToTopBtn = document.getElementById('scroll-to-top');

        if (scrollToTopBtn) {
            window.addEventListener('scroll', () => {
                if (window.pageYOffset > 300) {
                    scrollToTopBtn.classList.remove('opacity-0', 'invisible');
                    scrollToTopBtn.classList.add('opacity-100', 'visible');
                } else {
                    scrollToTopBtn.classList.add('opacity-0', 'invisible');
                    scrollToTopBtn.classList.remove('opacity-100', 'visible');
                }
            });

            scrollToTopBtn.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu if open
                    if (mobileMenu) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });

        // Add fade-in animation on scroll for elements
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeIn');
                }
            });
        }, observerOptions);

        // Observe all sections
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });

        // Prevent horizontal scroll on mobile
        document.addEventListener('DOMContentLoaded', function() {
            // Check for elements that might cause horizontal scroll
            const body = document.body;
            const html = document.documentElement;
            
            body.style.overflowX = 'hidden';
            html.style.overflowX = 'hidden';
        });
    </script>

</body>
</html>