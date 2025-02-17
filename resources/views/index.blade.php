<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-blue-900 p-4 text-white flex justify-center">
        <div class="flex space-x-5 ml-10">
            <a href="#" class="px-3 py-2 font-bold" id="homeNav" onclick="showPage('home')">Home</a>
            <a href="#" class="px-3 py-2 font-bold" id="aboutNav" onclick="showPage('about')">About</a>
            <a href="#" class="px-3 py-2 font-bold" id="contactNav" onclick="showPage('contact')">Contact</a>
        </div>
    </nav>

    <!-- Home -->
    <section id="home" class="p-10 text-center">
        <h1 class="text-4xl font-bold mb-5">Welcome to My Website</h1>
        <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
    </section>

    <!-- About Me -->
<section id="about" class="p-10 hidden text-center">
    <h2 class="text-3xl font-bold mb-5">About Me</h2>
    <img src="../webcam-toy-photo73.jpg" class="rounded-full mt-5 mx-auto w-32 h-32" alt="Profile">
    <h1 class="font-bold mt-3">Michelle Zefanyaaa</h1>
    <blockquote class="text-center text-2xl font-semibold text-gray-900 italic dark:text-black mt-6">
        Halo, saya Michelle, saya pelajar di 
    <span class="relative inline-block before:absolute before:-inset-1 before:block before:-skew-y-3 before:bg-blue-200">
    <span class="relative text-white dark:text-gray-950">SMK Taruna Bhakti</span>
    </span>
        dengan jurusan Rekayasa Perangkat Lunak.
    </blockquote>
    <p class="mt-5 text-lg max-w-2xl mx-auto">Saya memiliki cita-cita menjadi seorang frontend developer. Hobi saya adalah mempelajari dunia coding, terutama hal-hal yang belum saya pahami, agar saya bisa terus berkembang dan mencapai tujuan saya.</p>
    <p class="mt-5 text-lg max-w-2xl mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, aut assumenda. Veritatis, maxime corrupti quos ex, ut aperiam nulla, iure nisi tempora minima modi aspernatur alias odio voluptas nam esse. Deserunt unde sequi atque facere!</p>
</section>

<!-- Contact -->
    <section id="contact" class="p-10 hidden text-center">
        <h2 class="text-3xl font-bold mb-6">Contact Me</h2>
        <form id="contactForm" class="mt-5 max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg" onsubmit="return sendMessage(event)">
            <div class="mb-4">
                <input type="email" id="email" placeholder="Your Email" class="p-3 border rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-6">
                <textarea id="message" placeholder="Your Message" class="p-3 border rounded-lg w-full h-32 focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg w-full hover:bg-blue-700 transition duration-300">Send</button>
        </form>

        <!-- Pop-up Sukses -->
        <div id="successPopup" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
            <div class="bg-white p-8 rounded-lg text-center">
                <h3 class="text-2xl font-bold text-green-500">Pesan Anda Telah Dikirim!</h3>
                <button onclick="closePopup()" class="mt-5 bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">Tutup</button>
            </div>
        </div>
    </section>

    <script>
        function showPage(page) {
            // Hides all pages
            document.getElementById('home').classList.add('hidden');
            document.getElementById('about').classList.add('hidden');
            document.getElementById('contact').classList.add('hidden');
            
            // Removes active class from all navbar links
            document.getElementById('homeNav').classList.remove('text-blue-300');
            document.getElementById('aboutNav').classList.remove('text-blue-300');
            document.getElementById('contactNav').classList.remove('text-blue-300');
            
            // Shows the selected page
            document.getElementById(page).classList.remove('hidden');
            
            // Adds active class to the selected navbar link
            if (page === 'home') {
                document.getElementById('homeNav').classList.add('text-blue-300');
            } else if (page === 'about') {
                document.getElementById('aboutNav').classList.add('text-blue-300');
            } else if (page === 'contact') {
                document.getElementById('contactNav').classList.add('text-blue-300');
            }
        }

        // Initialize by showing home page
        showPage('home');

        // Function to handle the message sending
        function sendMessage(event) {
            event.preventDefault();  // Mencegah form untuk melakukan pengiriman sebenarnya

            // Ambil nilai dari email dan pesan
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Cek apakah kedua kolom sudah diisi
            if (email && message) {
                // Menampilkan pop-up sukses
                document.getElementById('successPopup').classList.remove('hidden');

                // Reset form setelah mengirim
                document.getElementById('email').value = '';
                document.getElementById('message').value = '';
            }
        }

        // Function to close the success pop-up
        function closePopup() {
            document.getElementById('successPopup').classList.add('hidden');
        }
    </script>

</body>
</html>