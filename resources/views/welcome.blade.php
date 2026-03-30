<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guitarism</title>
    <link rel="icon" type="image/png" href="{{ asset('images/guitarism-logo.png') }}">
    @vite('resources/css/app.css') 
</head>
<body class="bg-zinc-50"> 
   <header>
    <div class="container mx-auto flex items-center justify-between p-4 shadow-sm rounded-3xl mt-4 bg-white ring-1 ring-white/10">
        <a href="#" class="flex items-center gap-3 group">
    <div class="flex items-center justify-center size-12 bg-zinc-900 rounded-xl overflow-hidden ring-1 ring-white/10 ">
        <img 
            src="{{ asset('images/guitarism-logo.png') }}" 
            alt="Guitarism Logo" 
            class="size-8 object-contain"
        >
    </div>
    <span class="font-bold text-2xl tracking-tight text-black">Guitarism</span>
    </a>
     <nav>
        <ul class="flex gap-8">
            <li>
                <a href="" class="hover:text-amber-500 text-xl font-semibold">Home</a>
            </li>
            <li>
                <a href="" class="hover:text-amber-500 text-xl font-semibold">Shop</a>
            </li>
            <li>
                <a href="" class="hover:text-amber-500 text-xl font-semibold">About</a>
            </li>
            <li>
                <a href="" class="hover:text-amber-500 text-xl font-semibold">Contact</a>
            </li>
        </ul>
     </nav>
     <div>
        <button class="text-gray-700 px-6 py-2.5 rounded-xl text-sm font-bold hover:scale-105 transition active:scale-95 hover:text-amber-500">Login</button>
        <button class="bg-gray-700 text-white px-6 py-2.5 rounded-xl text-sm font-bold shadow-lg shadow-gray-700/20 hover:scale-105 transition active:scale-95    ">Register</button>
     </div>
    </div>
   </header>
</body>
</html>