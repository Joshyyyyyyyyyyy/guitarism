<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUITARISM</title>
    <link rel="icon" type="image/png" href="{{ asset('images/guitarism-logo.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/home.js'])
</head>
<body class="bg-zinc-900"> 
  <header id="main-header" class="sticky top-0 z-[100] transition-all duration-300 py-2">
    <div id="header-container" class="container mx-4 md:mx-auto flex items-center justify-between p-4 shadow-sm rounded-3xl mt-4 bg-transparent ring-1 ring-white/50 relative z-50">
        
            <a href="#" class="flex items-center gap-3 group">
                <div class="flex items-center justify-center size-12 bg-zinc-900 rounded-xl overflow-hidden ring-1 ring-white/50">
                    <img src="{{ asset('images/guitarism-logo.png') }}" alt="Logo" class="size-8 object-contain">
                </div>
                <span class="font-bold text-xl tracking-tight text-white">GUITARISM</span>
            </a>

            <nav class="hidden md:block">
                <ul class="flex gap-8">
                    <li><a href="" class=" text-white hover:text-amber-500 text-lg font-semibold transition" id="home-link-btn">HOME</a></li>
                    <li><a href="" class=" text-white hover:text-amber-500 text-lg font-semibold transition" id="shop-link">SHOP</a></li>
                    <li><a href="" class=" text-white hover:text-amber-500 text-lg font-semibold transition" id="new-arrival-link">NEW ARRIVAL</a></li>
                    <li><a href="" class=" text-white hover:text-amber-500 text-lg font-semibold transition" id="about-link">ABOUT</a></li>
                    <li><a href="" class=" text-white hover:text-amber-500 text-lg font-semibold transition" id="blog-link">BLOG</a></li>
                    <li><a href="" class=" text-white hover:text-amber-500 text-lg font-semibold transition" id="contact-link">CONTACT</a></li>
                </ul>
            </nav>

            <div class="hidden md:flex gap-2">
                <button class="text-white px-6 py-2.5 rounded-xl text-l font-bold hover:scale-105 transition hover:text-amber-500">LOGIN</button>
                <button class="bg-white text-black px-6 py-2.5 rounded-full text-l font-bold shadow-lg shadow-gray-700/20 hover:bg-amber-500 hover:scale-105 transition ring-1 ring-white/50">REGISTER</button>
            </div>

            <button id="menu-btn" class="md:hidden p-2 text-gray-700 hover:bg-white rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
    </div>

        <div id="mobile-menu-div" class="hidden md:hidden mx-4 mt-2 bg-zinc-900 rounded-2xl shadow-xl ring-1 ring-black/5 overflow-hidden transition-all duration-300">
            <div class="flex flex-col p-4 space-y-2">
                <a href="#" class="text-lg font-semibold text-white hover:text-amber-500 px-4 py-2 hover:bg-zinc-50 rounded-xl transition">HOME</a>
                <a href="#" class="text-lg font-semibold text-white hover:text-amber-500 px-4 py-2 hover:bg-zinc-50 rounded-xl transition">SHOP</a>
                <a href="#" class="text-lg font-semibold text-white hover:text-amber-500 px-4 py-2 hover:bg-zinc-50 rounded-xl transition">NEW ARRIVAL</a>
                <a href="#" class="text-lg font-semibold text-white hover:text-amber-500 px-4 py-2 hover:bg-zinc-50 rounded-xl transition">ABOUT</a>
                <a href="#" class="text-lg font-semibold text-white hover:text-amber-500 px-4 py-2 hover:bg-zinc-50 rounded-xl transition">BLOG</a>
                <a href="#" class="text-lg font-semibold text-white hover:text-amber-500 px-4 py-2 hover:bg-zinc-50 rounded-xl transition">CONTACT</a>
                <hr class="my-2 border-zinc-100">
                <button class="w-full text-center py-3 text-white font-bold hover:text-amber-500">LOGIN</button>
                <button class="w-full text-center py-3 bg-white text-black rounded-full font-bold active:scale-95 transition hover:bg-amber-500 hover:text-white">REGISTER</button>
            </div>
        </div>
 </header>
 <main>
    <section class="max-w-7xl mx-auto px-4 md:px-6 py-8 md:py-12" id="home-link">
        <div class="relative w-full min-h-[600px] md:min-h-[750px] bg-zinc-900 rounded-[2.5rem] md:rounded-[3rem] flex flex-col items-center justify-between pt-12 pb-6 px-6 md:pt-16 md:pb-10 md:px-12">
            
            <h2 class="absolute inset-0 flex items-center justify-center text-[22vw] md:text-[18vw] font-black text-white/[0.02] uppercase tracking-tighter select-none leading-none z-0">
                Guitarism
            </h2>

            <div class="absolute left-4 md:left-8 inset-y-0 flex items-center z-30">
                <button onclick="prevSlide()" class="p-3 md:p-5 rounded-full border border-white/10 text-white bg-zinc-900/50 backdrop-blur-sm hover:bg-white hover:text-black transition-all active:scale-90">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </button>
            </div>

            <div class="absolute right-4 md:right-8 inset-y-0 flex items-center z-30">
                <button onclick="nextSlide()" class="p-3 md:p-5 rounded-full border border-white/10 text-white bg-zinc-900/50 backdrop-blur-sm hover:bg-white hover:text-black transition-all active:scale-90">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>

            <div id="carousel-content" class="relative z-10 w-full flex-1 flex flex-col items-center justify-center transition-all duration-500 ease-in-out">
                <span id="guitar-name" class="mb-4 md:mb-6 text-white text-2xl md:text-5xl font-bold tracking-[0.2em] uppercase text-center px-4">
                    White Phantom
                </span>

                <div class="relative w-full max-w-sm md:max-w-3xl flex justify-center items-center transform hover:scale-105 transition-transform duration-700">
                    <img id="guitar-img" src="{{ asset('images/whitephantom.png') }}" class="w-full max-h-[350px] md:max-h-[480px] h-auto drop-shadow-[0_40px_40px_rgba(0,0,0,0.9)] object-contain">
                </div>
            </div>

            <div class="w-full mt-auto flex flex-col md:flex-row justify-between items-end z-20 gap-8">
                <div id="details-block" class="max-w-xs space-y-6 text-center md:text-left mx-auto md:mx-0 transition-all duration-500 ease-in-out">
                    <div class="space-y-2">
                        <p id="guitar-edition" class="text-[10px] tracking-[0.4em] text-zinc-500 uppercase font-black">Limited Edition</p>
                        <p id="guitar-desc" class="text-zinc-400 text-sm leading-relaxed opacity-80">
                            Hand-crafted white finish with high-output active pickups for the modern shredder.
                        </p>
                    </div>
                    <button class="bg-white text-black px-12 py-4 rounded-full font-bold hover:bg-zinc-200 transition-all active:scale-95 shadow-2xl text-xs uppercase tracking-widest">
                        Pre-order Now
                    </button>
                </div>

                <div class="hidden md:grid grid-cols-2 gap-x-12 gap-y-4 border-l border-white/10 pl-12">
                    <div class="flex flex-col">
                        <span class="text-[10px] text-zinc-500 uppercase tracking-widest font-bold">Body</span>
                        <span id="spec-body" class="text-white text-sm font-medium">Solid Mahogany</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-[10px] text-zinc-500 uppercase tracking-widest font-bold">Neck</span>
                        <span id="spec-neck" class="text-white text-sm font-medium">Roasted Maple</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-[10px] text-zinc-500 uppercase tracking-widest font-bold">Pickups</span>
                        <span id="spec-pickups" class="text-white text-sm font-medium">Active Ghost-6</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-[10px] text-zinc-500 uppercase tracking-widest font-bold">Scale</span>
                        <span id="spec-scale" class="text-white text-sm font-medium">25.5" Modern</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="max-w-7xl mx-auto px-4 md:px-6 py-8 md:py-12" id="shop-link">
        <div class="relative w-full min-h-[600px] md:min-h-[750px] bg-zinc-900 rounded-[2.5rem] md:rounded-[3rem] flex flex-col items-center justify-between pt-12 pb-6 px-6 md:pt-16 md:pb-10 md:px-12">
            
        </div>
    </section>
</main>
</body>     
</html>
<script>
    window.guitarData = [
    {
        name: "White Phantom",
        image: "{{ asset('images/whitephantom.png') }}",
        edition: "Limited Edition",
        desc: "Hand-crafted white finish with high-output active pickups for the modern shredder.",
        body: "Mahogany", neck: "Maple", pickups: "Active Ghost", scale: "25.5\""
    },
    {
        name: "Midnight Onyx",
        image: "{{ asset('images/midnightonyx.png') }}",
        edition: "Special Run",
        desc: "Deep gloss black with mahogany body and vintage-voiced humbuckers.",
        body: "Solid Alder", neck: "Ebony", pickups: "Vintage PAF", scale: "24.75\""
    },
    {
        name: "Crimson Ghost",
        image: "{{ asset('images/crimsonghost.png') }}",
        edition: "Custom Shop",
        desc: "A high-performance machine featuring a blood-red burst finish and a lightning-fast maple neck.",
        body: "Quilted Maple",
        neck: "Birdseye Maple",
        pickups: "Crimson Humbuckers",
        scale: "25.5\""
    },
    {
        name: "Alpha Prime",
        image: "{{ asset('images/AlphaPrime.png') }}",
        edition: "Pro Prototype",
        desc: "The pinnacle of ergonomic design; a headless, gunmetal powerhouse built for the modern technical virtuoso who demands zero distractions.",
        body: "T6 Aircraft-Grade Aluminum",
        neck: "Roasted Maple with Ebony Fretboard",
        pickups: "Active Fluence Humbuckers",
        scale: "25.5\" - 27\" Multiscale"
    },
    {
        name: "Emerald Sovereign",
        image: "{{ asset('images/Emeraldsovereign.png') }}",
        edition: "Custom Shop",
        desc: "A nature spirit embodied in wood; perfect for those seeking deep sustain and earth-shaking green tones.",
        body: "Swamp Ash",
        neck: "Roasted Maple",
        pickups: "Forest Single-Coils",
        scale: "25.5\""
    },
    {
        name: "Obsidian Monarch",
        image: "{{ asset('images/ObsidianMonarch.png') }}",
        edition: "Grand Reserve",
        desc: "A titan of engineering featuring a faceted walnut body and carbon fiber intake; crafted for unparalleled resonance and regal stage presence.",
        body: "Figured Walnut & Carbon Fiber Shell",
        neck: "Wenge with Emerald Vine Inlay",
        pickups: "Triple-Shot Boutique Humbuckers",
        scale: "25\""
    },
    {
        name: "Wasp Venom",
        image: "{{ asset('images/Waspvenom.png') }}",
        edition: "Custom Shop",
        desc: "Aggressive and ancient. This build delivers a bright, hot signal designed to cut through any mix.",
        body: "Basswood",
        neck: "Wenge",
        pickups: "Sting-V Passive",
        scale: "24.75\""
    },
    {
        name: "Oceanic Wraith",
        image: "{{ asset('images/OceanicWraith.png') }}",
        edition: "Boutique Series",
        desc: "A semi-hollow masterpiece featuring a mesmerizing blue burl top; designed for haunting resonance and fluid, liquid-like tones.",
        body: "Mahogany with Burl Maple Top",
        neck: "Ebony",
        pickups: "Vintage P-90 Soapbars",
        scale: "24.75\""
    },
    {
        name: "Violet Vex",
        image: "{{ asset('images/VioletVex.png') }}",
        edition: "Architect Series",
        desc: "A structural marvel featuring a webbed exoskeleton and skeletal inlays; engineered for surgical precision and crushing high-gain distortion.",
        body: "Machined Aluminum & Basswood",
        neck: "Purpleheart Wood",
        pickups: "Active Ceramic Humbuckers",
        scale: "26.5\""
    },
    {
        name: "Rose Reaver",
        image: "{{ asset('images/RoseReaver.png') }}",
        edition: "Cyberpunk Limited",
        desc: "Where brutal geometry meets neon elegance; featuring a matte pink aerospace-grade frame for the player who demands to be seen and heard.",
        body: "Reinforced Polymer & Obsidian Inserts",
        neck: "Carbon Fiber",
        pickups: "High-Gain Neon Humbuckers",
        scale: "25.5\""
    },
    {
        name: "Copperhead Apex",
        image: "{{ asset('images/CopperheadApex.png') }}",
        edition: "Industrial Series",
        desc: "A high-performance machine with a skeletal metallic frame; built for speed and precision with a tone as sharp as its geometry.",
        body: "Machined Magnesium Alloy",
        neck: "Roasted Maple with Inlay Art",
        pickups: "Custom Dual Humbuckers",
        scale: "25.5\""
    }
];
</script>
