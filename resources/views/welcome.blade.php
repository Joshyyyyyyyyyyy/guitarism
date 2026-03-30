<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUITARISM</title>
    <link rel="icon" type="image/png" href="{{ asset('images/guitarism-logo.png') }}">
    @vite('resources/css/app.css') 
</head>
<body class="bg-zinc-50"> 
  <header>
    <div class="container mx-4 md:mx-auto flex items-center justify-between p-4 shadow-sm rounded-3xl mt-4 bg-white ring-1 ring-black/5 relative z-50">
        
        <a href="#" class="flex items-center gap-3 group">
            <div class="flex items-center justify-center size-12 bg-zinc-900 rounded-xl overflow-hidden ring-1 ring-white/10">
                <img src="{{ asset('images/guitarism-logo.png') }}" alt="Logo" class="size-8 object-contain">
            </div>
            <span class="font-bold text-2xl tracking-tight text-black">Guitarism</span>
        </a>

        <nav class="hidden md:block">
            <ul class="flex gap-8">
                <li><a href="" class="hover:text-amber-500 text-l font-semibold transition">Home</a></li>
                <li><a href="" class="hover:text-amber-500 text-l font-semibold transition">Shop</a></li>
                <li><a href="" class="hover:text-amber-500 text-l font-semibold transition">About</a></li>
                <li><a href="" class="hover:text-amber-500 text-l font-semibold transition">Contact</a></li>
            </ul>
        </nav>

        <div class="hidden md:flex gap-2">
            <button class="text-gray-700 px-6 py-2.5 rounded-xl text-l font-bold hover:scale-105 transition hover:text-amber-500">LOGIN</button>
            <button class="bg-gray-700 text-white px-6 py-2.5 rounded-xl text-l font-bold shadow-lg shadow-gray-700/20 hover:scale-105 transition">REGISTER</button>
        </div>

        <button id="menu-btn" class="md:hidden p-2 text-gray-700 hover:bg-gray-100 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    <div id="mobile-menu-div" class="hidden md:hidden mx-4 mt-2 bg-white rounded-2xl shadow-xl ring-1 ring-black/5 overflow-hidden transition-all duration-300">
        <div class="flex flex-col p-4 space-y-2">
            <a href="#" class="text-lg font-semibold text-zinc-700 hover:text-amber-500 px-4 py-2 hover:bg-zinc-50 rounded-xl transition">HOME</a>
            <a href="#" class="text-lg font-semibold text-zinc-700 hover:text-amber-500 px-4 py-2 hover:bg-zinc-50 rounded-xl transition">SHOP</a>
            <a href="#" class="text-lg font-semibold text-zinc-700 hover:text-amber-500 px-4 py-2 hover:bg-zinc-50 rounded-xl transition">ABOUT</a>
            <a href="#" class="text-lg font-semibold text-zinc-700 hover:text-amber-500 px-4 py-2 hover:bg-zinc-50 rounded-xl transition">CONTACT</a>
            <hr class="my-2 border-zinc-100">
            <button class="w-full text-center py-3 text-zinc-600 font-bold hover:text-amber-500">LOGIN</button>
            <button class="w-full text-center py-3 bg-zinc-900 text-white rounded-xl font-bold active:scale-95 transition">REGISTER</button>
        </div>
    </div>
</header>
</body>
<script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu-div');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
</html>