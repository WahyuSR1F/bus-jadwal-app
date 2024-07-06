<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Document</title>
</head>
<body>
  <nav class="bg-gray-800 p-4 flex items-center justify-between">
    <div class="text-white text-2xl font-bold">
        Judul Website
    </div>
    <div class="hidden md:flex space-x-4">
        <a href="#" class="text-white hover:text-gray-300">Home</a>
        <a href="#" class="
text-white hover:text-gray-300">Daftar Bus</a>
        <a href="#" class="text-white hover:text-gray-300">Wisata</a>
        <a href="#" class="text-white hover:text-gray-300">Fasilitas</a>
    </div>
    <div class="md:hidden">
        <button class="md:hidden text-white focus:outline-none" id="menu-toggle"">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>
</nav>
<div
class="md:hidden fixed top-0 right-0 h-full w-2/3 bg-gray-800 transform translate-x-full transition-transform duration-300 ease-in-out"
id="mobile-menu">
<div class="p-4">
    <button class="text-white text-lg font-bold mb-4 focus:outline-none" id="close-menu">
        Tutup
    </button>
    <ul>
        <li><a href="#" class="text-white hover:text-gray-300 block py-2">Home</a></li>
                <li><a href="#" class="text-white hover:text-gray-300 block py-2">Daftar Bus</a></li>
                <li><a href="#" class="text-white hover:text-gray-300 block py-2">Wisata</a></li>
                <li><a href="#" class="text-white hover:text-gray-300 block py-2">Fasilitas</a></li>
            </ul>
        </div>
    </div>

  <script src="https://cdn.tailwindcss.com"></script>\
  
  <script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenu = document.getElementById('close-menu');
    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('translate-x-full');
    });
    closeMenu.addEventListener('click', () => {
        mobileMenu.classList.add('translate-x-full');
    });
</script>
</body>
</html>