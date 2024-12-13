<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend Roadmap - Codemap</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .connection-line {
            position: absolute;
            background-color: #3b82f6;
            transform-origin: left center;
        }

        .connection-dot {
            width: 8px;
            height: 8px;
            background-color: #3b82f6;
            border-radius: 50%;
            position: absolute;
        }

        .topic-container {
            position: relative;
            z-index: 1;
        }

        .connections-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .roadmap-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            position: relative;
        }

        /* Animasi pop up */
        @keyframes slide-in {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(0);
            }
        }

        @keyframes slide-out {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(100%);
            }
        }

        .topic-container {
            position: relative;
            z-index: 1;
        }

        #http-popup {
            transition: transform 0.5s ease-in-out, opacity 0.3s ease-in-out;
            z-index: 1000;
            /* Menambahkan z-index untuk pop-up */
        }

        #http-popup.show {
            opacity: 1;
            animation: slide-in 0.3s ease-in-out;
        }

        #http-popup.hide {
            opacity: 0;
            animation: slide-out 0.3s ease-in-out;
        }

        .divider {
            border-top: 2px solid #dadada;
            margin: 20px 0;
            position: relative;
        }

        @media (max-width: 768px) {
            .roadmap-grid {
                grid-template-columns: repeat(1, 1fr);
                /* Ubah jadi satu kolom */
                gap: 1.5rem;
                /* Kurangi jarak antar elemen */
            }
        }
    </style>
</head>

<body class="bg-gray-900 text-white min-h-screen">
    <!-- Navigation Bar -->
    <nav class="bg-gray-900 border-b border-gray-800 px-6 py-4">
        <div class="flex items-center justify-between max-w-7xl mx-auto">
            <div class="flex items-center space-x-6">
                <a href="../index.php" class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-500">
                    Codemap</a>
                <div class="relative group">
                    <button id="dropdownButton" class="px-4 py-2 text-gray-100 hover:text-blue-400">
                        Roadmaps
                    </button>
                    <a href="../index.php" class="px-4 py-2 text-gray-100 hover:text-blue-400">Home</a>

                    <!-- Dropdown Menu -->
                    <div id="dropdownMenu" class="absolute hidden mt-2 w-48 bg-gray-900 text-white rounded-md shadow-lg z-10">
                        <a href="frontend.php" class="block px-4 py-2 hover:bg-gray-700">Frontend Roadmap</a>
                        <a href="backend.php" class="block px-4 py-2 hover:bg-gray-700">Backend Roadmap</a>
                        <a href="fullstack.php" class="block px-4 py-2 hover:bg-gray-700">Fullstack Roadmap</a>
                    </div>
                    <!-- Scripts -->
                    <script>
                        // Dropdown toggle logic
                        const dropdownButton = document.getElementById('dropdownButton');
                        const dropdownMenu = document.getElementById('dropdownMenu');

                        dropdownButton.addEventListener('click', () => {
                            dropdownMenu.classList.toggle('hidden');
                        });

                        // Close dropdown if clicked outside
                        document.addEventListener('click', (event) => {
                            if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                                dropdownMenu.classList.add('hidden');
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Header Section -->
        <div class="mb-8">
            <h1 class="text-4xl font-bold mb-2">Frontend Developer</h1>
            <p class="text-gray-400">Panduan langkah demi langkah untuk menjadi frontend developer di 2024</p>

        </div>

        <!-- Roadmap Content -->
        <div class="bg-gray-800 rounded-lg p-6">
            <div class="flex items-center space-x-2 mb-4">
                <div class="w-4 h-4 rounded-full bg-yellow-500"></div>
                <span>Judul / Topic of Content</span>
            </div>
            <div class="flex items-center space-x-2 mb-4">
                <div class="w-4 h-4 rounded-full bg-gray-500"></div>
                <span>Detail of Content</span>
            </div>
        </div>

        <!-- Roadmap Diagram -->
        <div class="mt-8 bg-gray-800 rounded-lg p-6">
            <!-- Roadmap Container -->
            <div class="max-w-6xl mx-auto p-8">
                <div class="relative" id="roadmap">
                    <!-- Connections Layer -->
                    <div class="connections-container" id="connections"></div>

                    <!-- Topics Layer -->
                    <div class="roadmap-grid overflow-x-auto sm:overflow-visible">
                        <!-- Frontend Basics Column -->
                        <div class="topic-container space-y-4">
                            <div class="text-center">
                                <h3 class="text-xl font-bold mb-4">HTML</h3>
                                <button id="html-node" class="w-full bg-yellow-400 text-black px-4 py-2 rounded-lg hover:bg-yellow-500 transition-colors" onclick="showModal('html-definition')">
                                    Apa itu HTML?
                                </button>
                            </div>
                            <div class="space-y-2">
                                <button id="learn-basics" class="w-full bg-gray-700 px-4 py-2 rounded-lg hover:bg-gray-600 transition-colors" onclick="showModal('html-basics')">
                                    Dasar HTML
                                </button>
                                <button class="w-full bg-gray-700 px-4 py-2 rounded-lg hover:bg-gray-600 transition-colors" onclick="showModal('semantic-html')">
                                    Semantic HTML
                                </button>
                                <button class="w-full bg-gray-700 px-4 py-2 rounded-lg hover:bg-gray-600 transition-colors" onclick="showModal('forms-validations')">
                                    Form and Validasi
                                </button>
                                <button id="learn-basics" class="w-full bg-gray-700 px-4 py-2 rounded-lg hover:bg-gray-600 transition-colors" onclick="showModal('aksesibilitas')">
                                    Aksesibilitas
                                </button>
                                <button id="learn-basics" class="w-full bg-gray-700 px-4 py-2 rounded-lg hover:bg-gray-600 transition-colors" onclick="showModal('SEO')">
                                    SEO Dasar
                                </button>
                            </div>
                        </div>

                        <!-- Internet Column -->
                        <div class="topic-container space-y-4">
                            <div class="text-center">
                                <h3 class="text-xl font-bold mb-4">JavaScript</h3>
                                <button id="internet-node" class="w-full bg-yellow-400 text-black px-4 py-2 rounded-lg hover:bg-yellow-500 transition-colors" onclick="showModal('JSdefinition')">
                                    Apa itu JavaScript?
                                </button>
                            </div>
                            <div class="space-y-2">
                                <button class="w-full bg-gray-700 px-4 py-2 rounded-lg hover:bg-gray-600 transition-colors" onclick="showModal('dasarJS')">
                                    Dasar-dasar JavaScript
                                </button>
                                <button class="w-full bg-gray-700 px-4 py-2 rounded-lg hover:bg-gray-600 transition-colors" onclick="showModal('DOM')">
                                    Manipulasi DOM
                                </button>
                                <button class="w-full bg-gray-700 px-4 py-2 rounded-lg hover:bg-gray-600 transition-colors" onclick="showModal('API')">
                                    Fetch API
                                </button>
                            </div>
                        </div>

                        <!-- CSS Column -->
                        <div class="topic-container space-y-4">
                            <div class="text-center">
                                <h3 class="text-xl font-bold mb-4">CSS</h3>
                                <button id="html-node" class="w-full bg-yellow-400 text-black px-4 py-2 rounded-lg hover:bg-yellow-500 transition-colors" onclick="showModal('css')">
                                    Apa itu CSS?
                                </button>
                            </div>
                            <div class="space-y-2">
                                <button id="learn-basics" class="w-full bg-gray-700 px-4 py-2 rounded-lg hover:bg-gray-600 transition-colors" onclick="showModal('css-dasar')">
                                    CSS Dasar
                                </button>
                                <button class="w-full bg-gray-700 px-4 py-2 rounded-lg hover:bg-gray-600 transition-colors" onclick="showModal('css-layout')">
                                    Layout CSS
                                </button>
                                <button class="w-full bg-gray-700 px-4 py-2 rounded-lg hover:bg-gray-600 transition-colors" onclick="showModal('responsive-css')">
                                    Responsive Design
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="roadmap-grid overflow-x-auto sm:overflow-visible">
                    </div>
                </div>

                <!-- Modal -->
                <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center p-4 z-50">
                    <div class="bg-gray-800 rounded-lg max-w-lg w-full p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 id="modalTitle" class="text-xl font-bold"></h3>
                            <button onclick="hideModal()" class="text-gray-400 hover:text-white">
                                ✕
                            </button>
                        </div>
                        <div id="modalContent" class="prose prose-invert"></div>
                    </div>
                </div>

            </div>
            <!-- Pop-up Modal -->
            <div id="http-popup" class="fixed top-0 right-0 w-full sm:w-1/3 h-full bg-gray-800 p-6 transition-transform transform translate-x-full opacity-0"
                style="background-color: rgba(31, 41, 55, 0.9); z-index: 1000;">
                <h2 class="text-2xl font-bold mb-4"></h2>
                <p class="text-gray-400 mb-4"></p>
                <h1 class="text-gray-400 mb-4"></h1>
                <div class="divider"></div>
                <a id="popup-link" href="#" target="_blank" class="text-black-500 underline mb-4 block hover:text-gray-400"></a>
                <button class="bg-red-600 px-4 py-2 rounded-md hover:bg-red-700" onclick="hideModal()">Tutup</button>
            </div>

            <script>
                function showModal(type) {
                    const popup = document.getElementById('http-popup');
                    const popupContent = {
                        'html-definition': {
                            title: "Apa itu HTML",
                            content: "HTML atau HyperText Markup Language adalah bahasa dasar yang digunakan untuk membuat dan membangun struktur halaman web. HTML berfungsi sebagai kerangka kerja untuk mengatur konten, elemen, dan informasi yang akan ditampilkan di browser pengguna. HTML bekerja dengan menggunakan berbagai elemen atau tag yang memiliki fungsi spesifik dalam membangun tampilan halaman web yang informatif dan interaktif. Setiap elemen dalam HTML memiliki peran untuk menampilkan teks, gambar, tautan, formulir, dan berbagai konten lainnya yang membentuk pengalaman pengguna di halaman web.",
                            content2: "Kunjungi sumber berikut untuk mempelajari lebih lanjut:",
                            link: "https://www.w3schools.com/html/html_intro.asp",
                            linkText: "Pengenalan HTML"
                        },
                        'html-basics': {
                            title: "HTML Dasar",
                            content: "Bagian pertama yang harus dipelajari dalam HTML adalah dasar-dasarnya. Ini meliputi pemahaman elemen-elemen utama seperti heading untuk memberikan judul halaman atau bagian, paragraf untuk menuliskan teks yang informatif, serta elemen-elemen lainnya seperti daftar dan tautan. Elemen-elemen ini memungkinkan halaman memiliki struktur yang rapi dan mudah dipahami oleh pengguna. Selain itu, elemen gambar juga digunakan untuk membuat halaman lebih menarik secara visual. Pemahaman ini menjadi fondasi penting sebelum masuk ke konsep yang lebih kompleks.",
                            content2: "Kunjungi sumber berikut untuk mempelajari lebih lanjut:",
                            link: "https://www.w3schools.com/html/html_intro.asp",
                            linkText: "Pelajari Lebih Mengenai Dasar HTML "
                        },
                        'semantic-html': {
                            title: "Semantic HTML",
                            content: "Konsep Writing Semantic HTML adalah praktik menulis HTML dengan elemen yang memiliki makna atau tujuan spesifik, yang membuat halaman lebih mudah dipahami oleh mesin pencari dan teknologi bantu seperti pembaca layar. Elemen semantik seperti <header>, <nav>, <section>, dan <footer> digunakan untuk memisahkan konten halaman ke dalam bagian yang jelas dan memiliki konteks yang mudah dipahami. Menggunakan elemen semantik juga meningkatkan performa SEO dan membantu dalam membangun halaman web yang ramah dan inklusif.",
                            content2: "Kunjungi sumber berikut untuk mempelajari lebih lanjut:",
                            link: "https://www.w3schools.com/html/html5_semantic_elements.asp",
                            linkText: "Pelajari lebih mengenai Semantic HTML"
                        },
                        'forms-validations': {
                            title: "Formulir dan Validasi",
                            content: "Formulir adalah salah satu elemen penting dalam HTML yang memungkinkan pengguna untuk berinteraksi dengan halaman web, misalnya mengirimkan data atau masukan. Forms and Validations adalah aspek yang perlu dipahami, di mana formulir digunakan untuk mengumpulkan informasi seperti nama, email, atau umpan balik dari pengguna. Validasi formulir dilakukan untuk memastikan bahwa data yang dikirim oleh pengguna sudah sesuai dengan format yang diinginkan, seperti memastikan email valid atau kolom yang wajib diisi sudah terisi dengan benar. Validasi ini bisa dilakukan langsung dengan atribut HTML atau dengan bantuan JavaScript untuk mengatur logika yang lebih kompleks.",
                            content2: "Kunjungi sumber berikut untuk mempelajari lebih lanjut:",
                            link: "https://web.dev/learn/forms/",
                            linkText: "Formulir dan Validasi lebih lanjut"
                        },
                        'aksesibilitas': {
                            title: "Aksesibilitas",
                            content: "Aksesibilitas juga menjadi komponen penting dalam pembuatan halaman menggunakan HTML. Accessibility berfokus pada membuat halaman yang dapat diakses oleh semua pengguna, termasuk mereka dengan disabilitas atau keterbatasan tertentu. Ini dilakukan dengan memastikan penggunaan elemen yang tepat, memberikan teks alternatif pada gambar, dan menggunakan atribut ARIA untuk mendukung teknologi bantu seperti pembaca layar. Dengan mendesain halaman yang inklusif dan ramah aksesibilitas, pengalaman pengguna bisa lebih maksimal tanpa membatasi kelompok tertentu.",
                            content2: "Kunjungi sumber berikut untuk mempelajari lebih lanjut:",
                            link: "https://web.dev/accessibility",
                            linkText: "Pelajari lebih mengenai Aksesibilitas"
                        },
                        'SEO': {
                            title: "SEO Dasar",
                            content: "SEO Basics juga sangat penting dalam HTML. SEO (Search Engine Optimization) berfokus pada strategi yang dilakukan agar halaman web muncul di hasil pencarian mesin pencari seperti Google. Dalam HTML, praktik ini dilakukan dengan menambahkan meta tags, membuat struktur heading yang benar, menambahkan teks alternatif pada gambar, dan membuat tautan internal dan eksternal yang relevan. Teknik ini membuat halaman mudah ditemukan oleh mesin pencari dan memungkinkan lebih banyak pengunjung mengakses halaman yang dibuat.",
                            content2: "Kunjungi sumber berikut untuk mempelajari lebih lanjut:",
                            link: "https://developers.google.com/search/docs",
                            linkText: "Pelajari lebih mengenai SEO"
                        },
                        JSdefinition: {
                            title: "Apa itu JavaScript?",
                            content: "JavaScript adalah bahasa pemrograman yang menambahkan interaktivitas dan logika pada halaman web. Dengan JavaScript, pengembang dapat membuat elemen dinamis seperti animasi, validasi formulir, atau pengambilan data dari server.",
                            content2: "Kunjungi sumber berikut untuk mempelajari lebih lanjut:",
                            link: "https://www.w3schools.com/js/",
                            linkText: "Pelajari lebih mengenai JavaScript"
                        },
                        dasarJS: {
                            title: "Dasar JavaScript?",
                            content: "Dasar JavaScript meliputi variabel, tipe data, operator, fungsi, serta struktur kontrol seperti loops dan conditionals. Elemen ini memungkinkan pengembang mengatur alur logika aplikasi secara fleksibel.",
                            content2: "Kunjungi sumber berikut untuk mempelajari lebih lanjut:",
                            link: "https://www.w3schools.com/js/",
                            linkText: "Pelajari lebih mengenai JavaSript"
                        },
                        DOM: {
                            title: "DOM Manipulation",
                            content: "JavaScript dapat mengakses dan mengubah struktur HTML melalui DOM. Contohnya, elemen dapat diubah tampilannya secara langsung, seperti mengganti warna teks atau menambahkan elemen baru.",
                            content2: "Kunjungi sumber berikut untuk mempelajari lebih lanjut:",
                            link: "https://www.codeguage.com/courses/js/html-dom-introduction",
                            linkText: "Pelajari lebih mengenai DOM"
                        },
                        API: {
                            title: "Fetch API",
                            content: "Fetch API digunakan untuk mengambil data dari server dengan mudah dan cepat melalui permintaan HTTP. Dengan Fetch API, pengembang bisa mengambil informasi dari server tanpa perlu me-refresh halaman. Contohnya, mengakses data JSON dari server atau melakukan komunikasi dengan database untuk menampilkan data secara dinamis.",
                            content2: "Kunjungi sumber berikut untuk mempelajari lebih lanjut:",
                            link: "https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API",
                            linkText: "Pelajari lebih mengenai Fetch API"
                        },
                        'css': {
                            title: "CSS adalah",
                            content: "Bahasa yang digunakan untuk mengatur tampilan dan desain halaman web. Dengan CSS, pengembang dapat mengontrol bagaimana elemen-elemen HTML terlihat, seperti warna, font, tata letak, ukuran, hingga efek visual. CSS memainkan peran penting dalam menciptakan pengalaman pengguna yang menarik, responsif, dan profesional.",
                            content2: "Kunjungi sumber berikut untuk mempelajari lebih lanjut:",
                            link: "https://www.w3schools.com/js/",
                            linkText: "Pelajari lebih mengenai CSS"
                        },
                        'css-dasar': {
                            title: "Dasar CSS",
                            content: "Dasar CSS meliputi pemahaman tentang selektor, properti, dan nilai. Selektor digunakan untuk memilih elemen HTML tertentu yang ingin diberi gaya, misalnya elemen berbasis tag, kelas, atau ID. Setiap elemen memiliki properti seperti color, font-size, dan background-color, yang menentukan gaya visualnya. Nilai yang diberikan pada properti akan menentukan bagaimana elemen tersebut tampil, misalnya color: red; membuat teks berwarna merah. Dasar-dasar ini menjadi fondasi dalam memahami penggunaan CSS secara lebih kompleks.",
                            content2: "Kunjungi sumber berikut untuk mempelajari lebih lanjut:",
                            link: "https://www.w3schools.com/css/",
                            linkText: "Pelajari lebih mengenai dasar-dasar CSS"
                        },
                        'css-layout': {
                            title: "Layout CSS",
                            content: "CSS memungkinkan pengembang membuat tata letak halaman web yang rapi dan responsif. Teknik seperti Flexbox digunakan untuk menyusun elemen secara fleksibel, baik secara horizontal maupun vertikal, sementara CSS Grid menawarkan sistem berbasis baris dan kolom untuk desain yang lebih kompleks. Selain itu, pemahaman tentang box model sangat penting untuk mengatur ruang dalam dan luar elemen (padding, border, margin). Dengan alat ini, pengembang dapat menciptakan tata letak yang terorganisir dan mudah dinavigasi.",
                            content2: "Kunjungi sumber berikut untuk mempelajari lebih lanjut:",
                            link: "https://flexboxfroggy.com/",
                            linkText: "Pelajari lebih mengenai Layout CSS"
                        },

                        'responsive-css': {
                            title: "Responsive Design",
                            content: "Desain responsif memastikan halaman web dapat menyesuaikan tampilannya pada berbagai perangkat, dari ponsel hingga layar desktop. Media queries memungkinkan pengembang menetapkan gaya khusus berdasarkan ukuran layar atau perangkat. Selain itu, penggunaan unit ukuran relatif seperti %, em, dan rem membantu elemen-elemen web tetap proporsional di berbagai resolusi layar. Desain responsif sangat penting untuk memastikan pengalaman pengguna yang konsisten di semua perangkat.",
                            content2: "Kunjungi sumber berikut untuk mempelajari lebih lanjut:",
                            link: "https://web.dev/learn/design/",
                            linkText: "Pelajari lebih mengenai Responsive Design CSS"
                        },
                    };

                    if (popupContent[type]) {
                        popup.querySelector('h2').innerText = popupContent[type].title;
                        popup.querySelector('p').innerText = popupContent[type].content;
                        popup.querySelector('h1').innerText = popupContent[type].content2;
                        const link = popup.querySelector('#popup-link');
                        link.href = popupContent[type].link;
                        link.style.display = popupContent[type].link ? 'block' : 'none'; // Sembunyikan jika tidak ada tautan
                        link.innerText = popupContent[type].linkText; // Atur teks unik sesuai properti `linkText`

                        popup.classList.remove('translate-x-full', 'opacity-0');
                        popup.classList.add('translate-x-0', 'opacity-100');
                    }
                }

                function hideModal() {
                    const popup = document.getElementById('http-popup');
                    popup.classList.remove('translate-x-0', 'opacity-100');
                    popup.classList.add('translate-x-full', 'opacity-0');
                }
                const dropdownBtn = document.querySelector('.dropdown-btn');
                const dropdown = document.querySelector('.dropdown');
            </script>

    </main>
</body>

</html>