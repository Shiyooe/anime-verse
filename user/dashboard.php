<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimeList - Temukan Anime Favoritmu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .gradient-animate {
            background-size: 200% 200%;
            animation: gradient 5s ease infinite;
        }
        html {
            scroll-behavior: smooth;
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-10px);
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .text-shadow {
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 min-h-screen">
    
    <!-- Navbar -->
    <nav class="fixed w-full z-50 glass-effect">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="text-white font-bold text-3xl flex items-center space-x-2">
                    <div class="w-10 h-10 bg-gradient-to-r from-pink-500 to-purple-600 rounded-lg flex items-center justify-center">
                        <span class="text-2xl">🎌</span>
                    </div>
                    <span class="text-shadow">AnimeList</span>
                </div>
                <!-- Menu Navigasi untuk Desktop -->
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-white hover:text-pink-400 transition font-medium">Home</a>
                    <a href="#anime" class="text-white hover:text-pink-400 transition font-medium">Anime</a>
                    <a href="#manga" class="text-white hover:text-pink-400 transition font-medium">Manga</a>
                    <a href="#community" class="text-white hover:text-pink-400 transition font-medium">Community</a>
                </div>
            
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-20 px-6 relative overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-20 left-10 w-72 h-72 bg-pink-500 rounded-full filter blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-purple-500 rounded-full filter blur-3xl"></div>
        </div>
        <div class="container mx-auto relative z-10">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="fade-in-up space-y-6">
                    <div class="inline-block px-4 py-2 glass-effect rounded-full text-pink-400 font-semibold text-sm mb-4">
                        ✨ Platform Anime Terlengkap
                    </div>
                    <h1 class="text-6xl md:text-7xl font-black text-white mb-6 leading-tight text-shadow">
                        Jelajahi Dunia <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 via-purple-500 to-pink-500 gradient-animate">Anime</span> Tanpa Batas
                    </h1>
                    <p class="text-gray-300 text-xl leading-relaxed">
                        Temukan ribuan anime, buat daftar watchlist, baca manga, dan bergabung dengan komunitas pecinta anime terbesar di Indonesia.
                    </p>
                    <div class="flex flex-wrap gap-4 pt-4">
                        <button class="bg-gradient-to-r from-pink-500 to-purple-600 text-white px-10 py-4 rounded-full font-bold text-lg hover:shadow-2xl hover:shadow-pink-500/50 transition transform hover:scale-105">
                            🚀 Mulai Sekarang
                        </button>
                        <button class="glass-effect text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-white hover:bg-opacity-10 transition">
                            📺 Lihat Anime
                        </button>
                    </div>
                    <div class="flex items-center space-x-8 pt-8">
                        <div>
                            <div class="text-3xl font-bold text-white">10K+</div>
                            <div class="text-gray-400">Anime</div>
                        </div>
                        <div class="w-px h-12 bg-gray-600"></div>
                        <div>
                            <div class="text-3xl font-bold text-white">50K+</div>
                            <div class="text-gray-400">Users</div>
                        </div>
                        <div class="w-px h-12 bg-gray-600"></div>
                        <div>
                            <div class="text-3xl font-bold text-white">4.9/5</div>
                            <div class="text-gray-400">Rating</div>
                        </div>
                    </div>
                </div>
                <div class="float-animation">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-pink-500 to-purple-600 rounded-3xl blur-3xl opacity-40"></div>
                        <div class="relative grid grid-cols-2 gap-4">
                            <div class="space-y-4">
                                <div class="glass-effect rounded-2xl p-6 card-hover">
                                    <div class="w-full h-40 bg-gradient-to-br from-pink-600 to-purple-600 rounded-xl mb-4 flex items-center justify-center text-5xl">
                                        <img src="img/aot.jpg" alt="Attack on Titan" class="w-full h-full object-cover rounded-xl">
                                    </div>
                                    <div class="text-white font-bold">Attack on Titan</div>
                                    <div class="text-yellow-400 text-sm">⭐ 9.5</div>
                                </div>
                                <div class="glass-effect rounded-2xl p-6 card-hover">
                                    <div class="w-full h-40 bg-gradient-to-br from-red-600 to-orange-600 rounded-xl mb-4 flex items-center justify-center text-5xl">
                                        <img src="img/demon.jpg" alt="Demon Slayer" class="w-full h-full object-cover rounded-xl">
                                    </div>
                                    <div class="text-white font-bold">Demon Slayer</div>
                                    <div class="text-yellow-400 text-sm">⭐ 9.2</div>
                                </div>
                            </div>
                            <div class="space-y-4 pt-8">
                                <div class="glass-effect rounded-2xl p-6 card-hover">
                                    <div class="w-full h-40 bg-gradient-to-br from-orange-600 to-red-600 rounded-xl mb-4 flex items-center justify-center text-5xl">
                                        <img src="img/Ilustrasi_Karakter_Anime_Jujutsu_Kaisen-2023_06_13-11_38_18_82354865b222a213006a91b44d3a1c25_960x640_thumb.webp" alt="Jujutsu Kaisen" class="w-full h-full object-cover rounded-xl">
                                    </div>
                                    <div class="text-white font-bold">Jujutsu Kaisen</div>
                                    <div class="text-yellow-400 text-sm">⭐ 8.9</div>
                                </div>
                                <div class="glass-effect rounded-2xl p-6 card-hover">
                                    <div class="w-full h-40 bg-gradient-to-br from-green-600 to-teal-600 rounded-xl mb-4 flex items-center justify-center text-5xl">
                                        <img src="img/one.jpg" alt="One Piece" class="w-full h-full object-cover rounded-xl">
                                    </div>
                                    <div class="text-white font-bold">One Piece</div>
                                    <div class="text-yellow-400 text-sm">⭐ 9.0</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Anime Section -->
    <section id="anime" class="py-20 px-6 relative">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <div class="inline-block px-6 py-2 glass-effect rounded-full text-pink-400 font-semibold mb-4">
                    🔥 Trending Now
                </div>
                <h2 class="text-5xl font-black text-white mb-4 text-shadow">Anime Populer Minggu Ini</h2>
                <p class="text-gray-400 text-lg">Jangan lewatkan anime terbaik yang sedang ramai dibicarakan</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $animes = [
                    ['title' => 'Attack on Titan', 'rating' => '9.5', 'episodes' => '87', 'genre' => 'Action, Drama', 'emoji' => '🎭'],
                    ['title' => 'Demon Slayer', 'rating' => '9.2', 'episodes' => '44', 'genre' => 'Action, Fantasy', 'emoji' => '⚔️'],
                    ['title' => 'One Piece', 'rating' => '9.0', 'episodes' => '1000+', 'genre' => 'Adventure', 'emoji' => '🏴‍☠️'],
                    ['title' => 'Jujutsu Kaisen', 'rating' => '8.9', 'episodes' => '24', 'genre' => 'Action, Supernatural', 'emoji' => '🔥'],
                    ['title' => 'My Hero Academia', 'rating' => '8.7', 'episodes' => '113', 'genre' => 'Action, School', 'emoji' => '💪'],
                    ['title' => 'Naruto Shippuden', 'rating' => '8.8', 'episodes' => '500', 'genre' => 'Action, Ninja', 'emoji' => '🍥'],
                    ['title' => 'Tokyo Revengers', 'rating' => '8.5', 'episodes' => '24', 'genre' => 'Action, Time Travel', 'emoji' => '⏰'],
                    ['title' => 'Spy x Family', 'rating' => '9.1', 'episodes' => '25', 'genre' => 'Comedy, Action', 'emoji' => '🕵️']
                ];
                $gradients = [
                    'from-pink-600 to-purple-600',
                    'from-blue-600 to-cyan-600',
                    'from-orange-600 to-red-600',
                    'from-green-600 to-teal-600',
                    'from-yellow-600 to-orange-600',
                    'from-indigo-600 to-purple-600',
                    'from-red-600 to-pink-600',
                    'from-teal-600 to-blue-600'
                ];
                foreach($animes as $index => $anime):
                    $gradient = $gradients[$index % 8];
                ?>
                <div class="glass-effect rounded-2xl overflow-hidden card-hover cursor-pointer group">
                    <div class="h-72 bg-gradient-to-br <?php echo $gradient; ?> relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center text-8xl opacity-50 group-hover:scale-110 transition-transform duration-300">
                            <?php echo $anime['emoji']; ?>
                        </div>
                        <div class="absolute top-4 right-4 bg-black bg-opacity-70 text-yellow-400 px-3 py-1 rounded-full font-bold text-sm flex items-center space-x-1">
                            <span>⭐</span>
                            <span><?php echo $anime['rating']; ?></span>
                        </div>
                        <div class="absolute bottom-4 left-4 bg-black bg-opacity-70 text-white px-3 py-1 rounded-full text-xs">
                            <?php echo $anime['episodes']; ?> Episodes
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-white font-bold text-xl mb-2 group-hover:text-pink-400 transition"><?php echo $anime['title']; ?></h3>
                        <p class="text-gray-400 text-sm"><?php echo $anime['genre']; ?></p>
                        <button class="mt-4 w-full bg-gradient-to-r from-pink-500 to-purple-600 text-white py-2 rounded-lg font-semibold opacity-0 group-hover:opacity-100 transition">
                            Lihat Detail
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Manga Section -->
    <section id="manga" class="py-20 px-6">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <div class="inline-block px-6 py-2 glass-effect rounded-full text-purple-400 font-semibold mb-4">
                    📚 Read Now
                </div>
                <h2 class="text-5xl font-black text-white mb-4 text-shadow">Manga Terpopuler</h2>
                <p class="text-gray-400 text-lg">Baca manga favorit kamu kapan saja, dimana saja</p>
            </div>
            <div class="grid md:grid-cols-3 lg:grid-cols-5 gap-6">
                <?php
                $mangas = [
                    ['title' => 'One Piece', 'chapters' => '1000+', 'emoji' => '🏴‍☠️'],
                    ['title' => 'Berserk', 'chapters' => '370+', 'emoji' => '⚔️'],
                    ['title' => 'Tokyo Ghoul', 'chapters' => '143', 'emoji' => '👹'],
                    ['title' => 'Death Note', 'chapters' => '108', 'emoji' => '📓'],
                    ['title' => 'Vagabond', 'chapters' => '327', 'emoji' => '🗡️'],
                ];
                $manga_gradients = [
                    'from-cyan-600 to-blue-600',
                    'from-red-600 to-gray-700',
                    'from-purple-600 to-red-600',
                    'from-gray-700 to-black',
                    'from-amber-600 to-orange-600'
                ];
                foreach($mangas as $index => $manga):
                    $gradient = $manga_gradients[$index];
                ?>
                <div class="glass-effect rounded-2xl overflow-hidden card-hover cursor-pointer group">
                    <div class="h-80 bg-gradient-to-br <?php echo $gradient; ?> relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center text-9xl opacity-40 group-hover:scale-110 transition-transform duration-300">
                            <?php echo $manga['emoji']; ?>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                            <div class="text-white font-bold text-lg"><?php echo $manga['title']; ?></div>
                            <div class="text-gray-300 text-sm"><?php echo $manga['chapters']; ?> Chapters</div>
                        </div>
                    </div>
                    <div class="p-4">
                        <button class="w-full bg-purple-600 text-white py-2 rounded-lg font-semibold hover:bg-purple-700 transition">
                            Mulai Baca
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Community Section -->
    <section id="community" class="py-20 px-6">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <div class="inline-block px-6 py-2 glass-effect rounded-full text-green-400 font-semibold mb-4">
                    👥 Join Us
                </div>
                <h2 class="text-5xl font-black text-white mb-4 text-shadow">Komunitas Kami</h2>
                <p class="text-gray-400 text-lg">Bergabung dengan ribuan pecinta anime dari seluruh Indonesia</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <?php
                $members = [
                    ['name' => 'Rina Nakamura', 'role' => 'Top Reviewer', 'reviews' => '1,234', 'avatar' => '👩'],
                    ['name' => 'Kenji Tanaka', 'role' => 'Community Mod', 'reviews' => '892', 'avatar' => '👨'],
                    ['name' => 'Yuki Sato', 'role' => 'Active Member', 'reviews' => '456', 'avatar' => '🧑'],
                ];
                foreach($members as $member):
                ?>
                <div class="glass-effect rounded-2xl p-6 card-hover">
                    <div class="flex items-start space-x-4">
                        <div class="w-20 h-20 bg-gradient-to-br from-pink-500 to-purple-600 rounded-2xl flex items-center justify-center text-4xl flex-shrink-0">
                            <?php echo $member['avatar']; ?>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-white font-bold text-xl mb-1"><?php echo $member['name']; ?></h3>
                            <p class="text-pink-400 text-sm mb-3"><?php echo $member['role']; ?></p>
                            <div class="flex items-center space-x-4 text-sm text-gray-400">
                                <div>📝 <?php echo $member['reviews']; ?> Reviews</div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="glass-effect rounded-3xl p-8 md:p-12">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <h3 class="text-3xl font-bold text-white mb-4">Kenapa Bergabung dengan Komunitas Kami?</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start space-x-3">
                                <span class="text-2xl">✨</span>
                                <div>
                                    <div class="text-white font-semibold">Diskusi Seru</div>
                                    <div class="text-gray-400 text-sm">Bahas anime favorit dengan sesama penggemar</div>
                                </div>
                            </li>
                            <li class="flex items-start space-x-3">
                                <span class="text-2xl">🎁</span>
                                <div>
                                    <div class="text-white font-semibold">Event & Giveaway</div>
                                    <div class="text-gray-400 text-sm">Ikuti event seru dan menangkan hadiah menarik</div>
                                </div>
                            </li>
                            <li class="flex items-start space-x-3">
                                <span class="text-2xl">🏆</span>
                                <div>
                                    <div class="text-white font-semibold">Ranking System</div>
                                    <div class="text-gray-400 text-sm">Dapatkan badge dan naik level sebagai reviewer</div>
                                </div>
                            </li>
                            <li class="flex items-start space-x-3">
                                <span class="text-2xl">📢</span>
                                <div>
                                    <div class="text-white font-semibold">Update Terbaru</div>
                                    <div class="text-gray-400 text-sm">Dapatkan info anime terbaru lebih cepat</div>
                                </div>
                            </li>
                        </ul>
                        <button class="mt-8 bg-gradient-to-r from-green-500 to-teal-600 text-white px-8 py-3 rounded-full font-bold hover:shadow-lg hover:shadow-green-500/50 transition transform hover:scale-105">
                            Gabung Sekarang
                        </button>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="glass-effect rounded-2xl p-6 text-center card-hover">
                            <div class="text-4xl mb-2">💬</div>
                            <div class="text-3xl font-bold text-white mb-1">15K+</div>
                            <div class="text-gray-400 text-sm">Diskusi Aktif</div>
                        </div>
                        <div class="glass-effect rounded-2xl p-6 text-center card-hover">
                            <div class="text-4xl mb-2">👥</div>
                            <div class="text-3xl font-bold text-white mb-1">50K+</div>
                            <div class="text-gray-400 text-sm">Members</div>
                        </div>
                        <div class="glass-effect rounded-2xl p-6 text-center card-hover">
                            <div class="text-4xl mb-2">⭐</div>
                            <div class="text-3xl font-bold text-white mb-1">100K+</div>
                            <div class="text-gray-400 text-sm">Reviews</div>
                        </div>
                        <div class="glass-effect rounded-2xl p-6 text-center card-hover">
                            <div class="text-4xl mb-2">🎉</div>
                            <div class="text-3xl font-bold text-white mb-1">200+</div>
                            <div class="text-gray-400 text-sm">Events</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-6">
        <div class="container mx-auto">
            <div class="relative overflow-hidden rounded-3xl">
                <div class="absolute inset-0 bg-gradient-to-r from-pink-600 via-purple-600 to-blue-600 gradient-animate"></div>
                <div class="relative z-10 p-12 md:p-16 text-center">
                    <h2 class="text-5xl font-black text-white mb-4 text-shadow">Siap Memulai Petualangan?</h2>
                    <p class="text-white text-xl mb-8 opacity-90">Bergabung dengan ribuan penggemar anime lainnya sekarang juga!</p>
                    <div class="flex flex-wrap justify-center gap-4">
                        <button class="bg-white text-purple-600 px-10 py-4 rounded-full font-bold text-lg hover:shadow-2xl transition transform hover:scale-105">
                            🚀 Daftar Gratis
                        </button>
                        <button class="glass-effect text-white px-10 py-4 rounded-full font-bold text-lg border-2 border-white hover:bg-white hover:text-purple-600 transition">
                            📱 Download App
                        </button>
                    </div>
                    <div class="mt-8 flex justify-center items-center space-x-8 text-white">
                        <div class="flex items-center space-x-2">
                            <span class="text-2xl">✓</span>
                            <span>100% Gratis</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="text-2xl">✓</span>
                            <span>Tanpa Iklan</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="text-2xl">✓</span>
                            <span>HD Quality</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="glass-effect py-12 px-6 mt-20">
        <div class="container mx-auto">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="text-white font-bold text-2xl flex items-center space-x-2 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-r from-pink-500 to-purple-600 rounded-lg flex items-center justify-center">
                            <span class="text-2xl">🎌</span>
                        </div>
                        <span>Anime Tracker</span>
                    </div>
                    <p class="text-gray-400">Platform terlengkap untuk pecinta anime dan manga di Indonesia.</p>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Produk</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#anime" class="hover:text-pink-400 transition">Anime</a></li>
                        <li><a href="#manga" class="hover:text-pink-400 transition">Manga</a></li>
                        <li><a href="#community" class="hover:text-pink-400 transition">Community</a></li>
                        <li><a href="#" class="hover:text-pink-400 transition">Premium</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Perusahaan</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-pink-400 transition">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-pink-400 transition">Blog</a></li>
                        <li><a href="#" class="hover:text-pink-400 transition">Karir</a></li>
                        <li><a href="#" class="hover:text-pink-400 transition">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Ikuti Kami</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 glass-effect rounded-lg flex items-center justify-center text-white hover:bg-pink-500 transition">📘</a>
                        <a href="#" class="w-10 h-10 glass-effect rounded-lg flex items-center justify-center text-white hover:bg-pink-500 transition">🐦</a>
                        <a href="#" class="w-10 h-10 glass-effect rounded-lg flex items-center justify-center text-white hover:bg-pink-500 transition">📷</a>
                        <a href="#" class="w-10 h-10 glass-effect rounded-lg flex items-center justify-center text-white hover:bg-pink-500 transition">▶️</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-8 text-center text-gray-400">
                <p>&copy; 2024 AnimeList. All rights reserved. Made with ❤️ for anime fans</p>
            </div>
        </div>
    </footer>

</body>
</html>