<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tabungan KKL - Wujudkan Impian KKL Bersama</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .gradient-bg {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            }
            .floating {
                animation: floating 3s ease-in-out infinite;
            }
            @keyframes floating {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-10px); }
            }
            .fade-in {
                animation: fadeIn 0.8s ease-in;
            }
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(30px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .card-hover:hover {
                transform: translateY(-5px);
                box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            }
        </style>
    </head>
    <body class="dark min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 dark:from-gray-900 dark:via-blue-900 dark:to-indigo-900">
        <!-- Header Navigation -->
        <header class="relative z-10 w-full px-6 py-4">
            @if (Route::has('login'))
                <nav class="flex items-center justify-between max-w-7xl mx-auto">
                    <!-- Logo -->
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4zM18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"/>
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                                Tabungan KKL
                            </h1>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Kuliah Kerja Lapangan</p>
                        </div>
                    </div>

                    <!-- Navigation Menu -->
                    <div class="flex items-center space-x-4">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                               class="px-6 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-full hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                               class="px-4 py-2 text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">
                                Masuk
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                   class="px-6 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-full hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                                    Daftar
                                </a>
                            @endif
                        @endauth
                    </div>
                </nav>
            @endif
        </header>

        <!-- Main Content -->
        <main class="relative">
            <!-- Hero Section -->
            <section class="relative px-6 py-16 md:py-24">
                <div class="max-w-7xl mx-auto">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <!-- Left Content -->
                        <div class="fade-in">
                            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 dark:text-white leading-tight mb-6">
                                Wujudkan Impian
                                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                                    KKL
                                </span>
                                Bersama
                            </h1>
                            <p class="text-xl text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                                Platform digital untuk mengelola tabungan Kuliah Kerja Lapangan.
                                Mudah, aman, dan transparan untuk semua mahasiswa.
                            </p>

                            <!-- CTA Buttons -->
                            <div class="flex flex-col sm:flex-row gap-4 mb-12">
                                @guest
                                    <a href="{{ route('register') }}"
                                       class="px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-full hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg text-center font-semibold">
                                        Mulai Menabung
                                    </a>
                                    <a href="#features"
                                       class="px-8 py-4 border-2 border-blue-600 text-blue-600 rounded-full hover:bg-blue-600 hover:text-white transition-all duration-300 text-center font-semibold">
                                        Pelajari Lebih Lanjut
                                    </a>
                                @else
                                    <a href="{{ url('/dashboard') }}"
                                       class="px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-full hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg text-center font-semibold">
                                        Ke Dashboard
                                    </a>
                                @endguest
                            </div>

                            <!-- Stats -->
                            <div class="grid grid-cols-3 gap-8">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-blue-600 mb-1">1000+</div>
                                    <div class="text-sm text-gray-500">Mahasiswa Aktif</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-purple-600 mb-1">500M+</div>
                                    <div class="text-sm text-gray-500">Total Tabungan</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-green-600 mb-1">98%</div>
                                    <div class="text-sm text-gray-500">Kepuasan</div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Content - Illustration -->
                        <div class="relative">
                            <div class="floating">
                                <div class="relative">
                                    <!-- Main Card -->
                                    <div class="bg-white dark:bg-gray-800 rounded-3xl shadow-2xl p-8 mb-6">
                                        <div class="flex items-center justify-between mb-6">
                                            <h3 class="text-lg font-bold text-gray-900 dark:text-white">Tabungan KKL</h3>
                                            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                        </div>
                                        <div class="space-y-4">
                                            <div class="flex justify-between items-center">
                                                <span class="text-gray-600 dark:text-gray-400">Target KKL</span>
                                                <span class="text-xl font-bold text-gray-900 dark:text-white">Rp 5.000.000</span>
                                            </div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                                <div class="bg-gradient-to-r from-blue-600 to-purple-600 h-3 rounded-full" style="width: 75%"></div>
                                            </div>
                                            <div class="flex justify-between text-sm">
                                                <span class="text-gray-500">Rp 3.750.000 terkumpul</span>
                                                <span class="text-blue-600 font-semibold">75%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Floating Cards -->
                                    <div class="absolute -top-4 -right-4 bg-gradient-to-r from-green-400 to-blue-500 rounded-2xl p-4 shadow-lg">
                                        <div class="text-white text-center">
                                            <div class="text-lg font-bold">+Rp 150K</div>
                                            <div class="text-xs opacity-80">Minggu ini</div>
                                        </div>
                                    </div>

                                    <div class="absolute -bottom-4 -left-4 bg-gradient-to-r from-purple-400 to-pink-500 rounded-2xl p-4 shadow-lg">
                                        <div class="text-white text-center">
                                            <div class="text-lg font-bold">12</div>
                                            <div class="text-xs opacity-80">Minggu tersisa</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features Section -->
            <section id="features" class="px-6 py-16 bg-white/50 dark:bg-gray-900/50">
                <div class="max-w-7xl mx-auto">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                            Mengapa Memilih Tabungan KKL?
                        </h2>
                        <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                            Platform yang dirancang khusus untuk memudahkan mahasiswa mengelola tabungan KKL dengan fitur-fitur unggulan
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Feature 1 -->
                        <div class="card-hover bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-500 rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Aman & Terpercaya</h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                Sistem keamanan berlapis dengan enkripsi data dan verifikasi berlapis untuk melindungi tabungan Anda.
                            </p>
                        </div>

                        <!-- Feature 2 -->
                        <div class="card-hover bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-teal-500 rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Laporan Real-time</h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                Monitor progress tabungan secara real-time dengan dashboard yang informatif dan mudah dipahami.
                            </p>
                        </div>

                        <!-- Feature 3 -->
                        <div class="card-hover bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Kolaboratif</h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                Sistem yang memungkinkan koordinasi antar mahasiswa, bendahara, dan panitia dalam satu platform.
                            </p>
                        </div>

                        <!-- Feature 4 -->
                        <div class="card-hover bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Fleksibel</h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                Berbagai metode pembayaran dan jadwal setoran yang dapat disesuaikan dengan kemampuan mahasiswa.
                            </p>
                        </div>

                        <!-- Feature 5 -->
                        <div class="card-hover bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-r from-indigo-500 to-blue-500 rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5-5-5h5V3h0v14z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Mudah Digunakan</h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                Interface yang intuitif dan user-friendly, memudahkan semua kalangan untuk menggunakannya.
                            </p>
                        </div>

                        <!-- Feature 6 -->
                        <div class="card-hover bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg transition-all duration-300">
                            <div class="w-12 h-12 bg-gradient-to-r from-red-500 to-pink-500 rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m3 0H4a2 2 0 00-2 2v10a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Notifikasi</h3>
                            <p class="text-gray-600 dark:text-gray-300">
                                Sistem notifikasi otomatis untuk mengingatkan jadwal setoran dan update status tabungan.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="px-6 py-16">
                <div class="max-w-4xl mx-auto text-center">
                    <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl p-12 text-white">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6">
                            Siap Memulai Perjalanan KKL Anda?
                        </h2>
                        <p class="text-xl mb-8 opacity-90">
                            Bergabunglah dengan ribuan mahasiswa lainnya dan wujudkan impian KKL bersama-sama.
                        </p>
                        @guest
                            <a href="{{ route('register') }}"
                               class="inline-block px-8 py-4 bg-white text-blue-600 rounded-full hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg font-semibold">
                                Daftar Sekarang - Gratis!
                            </a>
                        @else
                            <a href="{{ url('/dashboard') }}"
                               class="inline-block px-8 py-4 bg-white text-blue-600 rounded-full hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg font-semibold">
                                Ke Dashboard Anda
                            </a>
                        @endguest
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white px-6 py-12">
            <div class="max-w-7xl mx-auto">
                <div class="grid md:grid-cols-4 gap-8">
                    <div class="col-span-2">
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4zM18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold">Tabungan KKL</h3>
                                <p class="text-gray-400 text-sm">Kuliah Kerja Lapangan</p>
                            </div>
                        </div>
                        <p class="text-gray-300 mb-4">
                            Platform digital terpercaya untuk mengelola tabungan Kuliah Kerja Lapangan mahasiswa dengan mudah dan aman.
                        </p>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-4">Quick Links</h4>
                        <ul class="space-y-2 text-gray-300">
                            <li><a href="#" class="hover:text-white transition-colors">Tentang Kami</a></li>
                            <li><a href="#features" class="hover:text-white transition-colors">Fitur</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">FAQ</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Kontak</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-4">Support</h4>
                        <ul class="space-y-2 text-gray-300">
                            <li><a href="#" class="hover:text-white transition-colors">Bantuan</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Panduan</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Privasi</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Syarat & Ketentuan</a></li>
                        </ul>
                    </div>
                </div>

                <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                    <p>&copy; {{ date('Y') }} Tabungan KKL. All rights reserved.</p>
                </div>
            </div>
        </footer>

        <!-- Background Elements -->
        <div class="fixed inset-0 overflow-hidden pointer-events-none">
            <div class="absolute -top-40 -right-32 w-80 h-80 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
            <div class="absolute -bottom-40 -left-32 w-80 h-80 bg-blue-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>
        </div>
    </body>
</html>
