<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeMap - Master Web Development Step by Step</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script>
      function toggleLoginModal() {
        const modal = document.getElementById("loginModal");
        modal.classList.toggle("hidden");
      }
  
      window.onload = function() {
  const codeMapText = document.querySelector('.animate-scale');
  codeMapText.classList.add('animate-scale');
};
    </script>
    <style>
        html {
        scroll-behavior: smooth;
      }

        @keyframes scaleOut {
      0% {
        transform: scale(2); 
        opacity: 0; 
      }
      100% {
        transform: scale(1); 
        opacity: 1; 
      }
     }

    .animate-scale {
      animation: scaleOut 1s ease forwards; 
    }
    </style>
</head>

<body class="bg-gradient-to-br from-gray-50 via-white to-blue-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-[#0A1627] border-b border-gray-700 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex h-16">
                <!-- Logo -->
                <div class="flex-none flex items-center">
                    <a href="index.php" class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-500">
                        CodeMap</a>
                </div>

                <!-- Centered Navigation -->
                <div class="flex-1 flex items-center justify-center space-x-8">
                    <a href="#roadmap" class="text-gray-300 hover:text-white">Roadmap</a>
                    <a href="#about" class="text-gray-300 hover:text-white">About</a>
                </div>
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <div class="relative overflow-hidden bg-gradient-to-br from-white via-blue-50 to-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 relative">
            <div class="text-center">
                <h1 class="text-5xl md:text-6xl font-extrabold text-gray-800 mb-6 leading-tight">
                    <br>
                    <span class="text-8xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-600 to-blue-500 animate-scale">
                        CodeMap</span>
                </h1>
                <p class="text-xl text-gray-600 mb-8">
                    Roadmap Terstruktur, Panduan Praktis, dan Newbie Friendly untuk Memulai Perjalanan Anda di Dunia Web
                    Development.
                </p>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <section id="about" class="py-16 bg-gray-50">
        <div class="bg-white py-16">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">About CodeMap</h1>
                </div>
                <div class="text-center md:grid-cols-2 gap-8 items-center">
                    <div class="space-y-4">
                        <p class="text-lg text-gray-600">CodeMap adalah platform pembelajaran interaktif yang dirancang untuk membantu pemula memulai perjalanan mereka di dunia pengembangan web melalui tiga roadmap utama: Frontend, Backend,dan Fullstack. Pada roadmap Frontend, Anda akan mempelajari dasar-dasar pengembangan antarmuka pengguna (UI) menggunakan HTML untuk struktur halaman, CSS (TailwindCSS) untuk desain yang efisien, dan React.js untuk membangun antarmuka yang dinamis dan interaktif. Roadmap Backend berfokus pada pengelolaan logika server, basis data, dan koneksi server dengan mempelajari PHP sebagai bahasa server-side, MySQL untuk manajemen database, dan Laravel sebagai framework PHP modern yang terstruktur. Sementara itu, roadmap Fullstack menggabungkan kedua jalur tersebut,memberikan pemahaman menyeluruh tentang pengembangan aplikasi web dari desain antarmuka hingga pengelolaan server dan database.Dengan materi yang terstruktur, praktis, dan aplikatif, CodeMap siap membantu Anda menjadi pengembang web yang kompeten dan siap menghadapi proyek nyata.
                        </p>
                        <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Fokus</h3>
                            <p class="text-gray-600">
                            Topik-topik yang dipilih dengan cermat yang paling penting
                            </p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">
                            Latihan
                            </h3>
                            <p class="text-gray-600">
                            Pembelajaran langsung dengan contoh nyata
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose CodeMap Section -->
    <div class="bg-blue-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-800 mb-6">Kenapa CodeMap?</h2>
                <p class="text-xl text-gray-600 mb-12">
                    Dirancang untuk mahasiswa/umum pemula yang ingin memulai belajar pengembangan web!
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-blue-100 p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                    <h3 class="text-xl font-semibold text-blue-600 mb-4">Mudah Dipahami</h3>
                    <p class="text-gray-600">
                        Dimulai dari langkah-langkah dari yang paling dasar.
                    </p>
                </div>
                <div class="bg-blue-100 p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                    <h3 class="text-xl font-semibold text-blue-600 mb-4">Akses yang Mudah</h3>
                    <p class="text-gray-600">
                        Platform ini bisa diakses kapan saja dan dimana saja! *selama ada internet
                    </p>
                </div>
                <div class="bg-blue-100 p-8 rounded-lg shadow-lg hover:shadow-xl transition">
                    <h3 class="text-xl font-semibold text-blue-600 mb-4">Ramah untuk Pemula</h3>
                    <p class="text-gray-600">
                        Mudah dipahami siapapun yang baru belajar dan tidak memiliki basic pemrograman.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Roadmap Section -->
    <section id="roadmap" class="py-16 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Frontend -->
          <div
            class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition duration-300 border border-gray-200"
          >
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Frontend</h3>
            <p class="text-gray-600 mb-6">
              Belajar untuk menjadi seorang frontend developer.
              <!-- html css(tailwind) JavaScript, React.js  -->
            </p>
            <a
              href="roadmap/frontend.php"
              class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition shadow-md inline-block hover:cursor-pointer animate-bounce">
              Mulai Belajar
            </a>
          </div>

          <!-- JavaScript -->
          <div
            class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition duration-300 border border-gray-200"
          >
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Backend</h3>
            <p class="text-gray-600 mb-6">
              Pelajari PHP (Laravel) dan MySQL untuk backend development.
              <!-- php(laravel) mysql -->
            </p>
            <a
              href="roadmap/backend.php"
              class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition shadow-md inline-block hover:cursor-pointer animate-bounce"
            >
              Mulai Belajar
            </a>
          </div>

          <!-- Frameworks -->
          <div
            class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition duration-300 border border-gray-200"
          >
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Fullstack</h3>
            <p class="text-gray-600 mb-6">
              Belajar React, Laravel, and modern frameworks untuk membuat web
              aplikasi.
            </p>
            <a
              href="roadmap/fullstack.php"
              class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition shadow-md inline-block hover:cursor-pointer animate-bounce"
            >
              Mulai Belajar
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer Content -->
    <footer class="bg-gray-800 py-10">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center text-white mb-10">
                <!-- Left Section: Logo and Description -->
                <div class="flex flex-col items-center md:items-start mb-6 md:mb-0">
                    <div class="flex items-center space-x-2">
                        <!-- Logo -->
                        <div class="bg-white p-2 rounded-full">
                            <span class="text-lg font-bold text-black">CM</span>
                        </div>
                        <a href="index.php" class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-500">
                            CodeMap</a>
                    </div>
                    <p class="text-gray-400 mt-2 text-sm text-center md:text-left">
                        Roadmap beginner friendly untuk siapapun yang ingin belajar menjadi web developer.
                    </p>
                </div>
                    <!-- Social Media -->
                    <div class="flex mt-6 md:mt-0 items-center space-x-4">
                            <a href="https://github.com/" target="_blank" class="text-gray-400 hover:text-white">Rendi
                            <i class="fab fa-github text-xl"></i>
                        </a>
                            <a href="https://www.instagram.com/" target="_blank" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                    </div>
                    <!-- Social Media -->
                    <div class="flex mt-6 md:mt-0 items-center space-x-4">
                            <a href="https://github.com/" target="_blank" class="text-gray-400 hover:text-white">Hanif
                            <i class="fab fa-github text-xl"></i>
                        </a>
                            <a href="https://www.instagram.com/" target="_blank" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                    </div>
                    <!-- Social Media -->
                    <div class="flex mt-6 md:mt-0 items-center space-x-4">
                            <a href="https://github.com/" target="_blank" class="text-gray-400 hover:text-white">Egi
                            <i class="fab fa-github text-xl"></i>
                        </a>
                            <a href="https://www.instagram.com/" target="_blank" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                    </div>
                </div>

            <!-- Centered Copyright -->
            <div class="text-center text-gray-400 text-sm">
                &copy; 2024 CodeMap. All rights reserved.
            </div>
            
        </div>
    </footer>

</body>

</html>