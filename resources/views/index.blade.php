<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.cdnfonts.com/css/raleway-5" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>
<body class="relative min-h-screen body text-white flex flex-col items-center justify-center mx-auto p-4">
    <img src="img/bg-blue.png" alt=""
        class="absolute inset-0 h-full w-full object-cover">
    <main
        x-data = "{ open: false }" 
        class="w-full flex">
        <section class="max-w-xl w-full flex flex-col items-center justify-center">
            <div class="perspective-500 flex flex-col gap-6">
                <h1 class="-translate-z-12 -rotate-x-30 rotate-y-40 uppercase text-6xl font-semibold"
                    > {{ $char->name }} Joe</h1>
                
                <div class="flex gap-6 -translate-z-12 -rotate-x-30 rotate-y-40 uppercase text-2xl font-semibold">
                    <div>
                        <h1>HP</h1>
                        <h1>ATK</h1>
                    </div>

                    <div>
                        <h1>: {{ $char->hp }}</h1>
                        <h1>: {{ $char->atk }}</h1>
                    </div>
                </div>

            </div>
        </section>

        <section class="w-full mt-20">
            <div class="perspective-500">
                {{-- <div class="absolute w-full h-150 bottom-0 left-0 bg-linear-to-t from-[#161e31] to-transparent"></div> --}}
                <img src="https://zzz.gg/_ipx/w_550&q_70/images/IconRole37.png" alt=""
                    class="-translate-z-12 -rotate-x-10">
            </div>
        </section>

        <section class="max-w-lg w-full flex flex-col items-center justify-center">
            <div class="w-full perspective-1500">
                <div class="w-full flex items-center gap-10 -rotate-x-30 -rotate-y-45 bg-black/10 text-white text-2xl font-bold rounded-sm">
                    <div class="flex items-center gap-1">
                        <img class="w-15 h-15 object-cover" src="https://static.vecteezy.com/system/resources/thumbnails/021/013/590/small/icon-of-energy-thunder-lightning-bolt-symbol-or-electricity-power-electric-sign-symbol-free-png.png" alt="">
                        <h1>{{ $char->stamina }}/100</h1>
                    </div>

                    <div class="flex items-center gap-1">
                        <svg class="w-15 text-black/70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12.0049 22.0027C6.48204 22.0027 2.00488 17.5256 2.00488 12.0027C2.00488 6.4799 6.48204 2.00275 12.0049 2.00275C17.5277 2.00275 22.0049 6.4799 22.0049 12.0027C22.0049 17.5256 17.5277 22.0027 12.0049 22.0027ZM8.50488 14.0027V16.0027H11.0049V18.0027H13.0049V16.0027H14.0049C15.3856 16.0027 16.5049 14.8835 16.5049 13.5027C16.5049 12.122 15.3856 11.0027 14.0049 11.0027H10.0049C9.72874 11.0027 9.50488 10.7789 9.50488 10.5027C9.50488 10.2266 9.72874 10.0027 10.0049 10.0027H15.5049V8.00275H13.0049V6.00275H11.0049V8.00275H10.0049C8.62417 8.00275 7.50488 9.12203 7.50488 10.5027C7.50488 11.8835 8.62417 13.0027 10.0049 13.0027H14.0049C14.281 13.0027 14.5049 13.2266 14.5049 13.5027C14.5049 13.7789 14.281 14.0027 14.0049 14.0027H8.50488Z"></path></svg>
                        <h1>{{ $char->coins }}</h1>
                    </div>
                </div>

                <button 
                    @click = "open = !open" 
                    class="group w-full flex items-center -rotate-x-30 -rotate-y-45 bg-white btn-shadowwhite hover:scale-105 text-[#161e31] text-6xl font-bold p-4 rounded-sm shadow-xl transition duration-200 cursor-pointer">
                    <div class="relative">
                        <h1>DUNGEON</h1>
                        <svg class="w-35 absolute top-1/2 -right-30 -translate-1/2 text-black/20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M17.4563 3L20.9991 3.00335L21.001 6.52648L15.5341 11.992L18.3624 14.8207L19.7772 13.4071L21.1915 14.8213L18.7166 17.2962L21.545 20.1246L20.1308 21.5388L17.3024 18.7104L14.8275 21.1853L13.4133 19.7711L14.8269 18.3562L11.9981 15.528L9.1703 18.3558L10.5849 19.7711L9.17064 21.1853L6.69614 18.71L3.86734 21.5388L2.45312 20.1246L5.28192 17.2958L2.80668 14.8213L4.22089 13.4071L5.63477 14.8202L8.46212 11.992L3.00181 6.53118L2.99907 3L6.54506 3.00335L11.9981 8.457L17.4563 3ZM9.87612 13.406L7.04807 16.234L7.75607 16.941L10.5831 14.113L9.87612 13.406ZM19.0001 5.001H18.2831L13.4121 9.87L14.1191 10.577L19.0001 5.698V5.001ZM5.00007 5.001V5.701L16.2411 16.942L16.9482 16.2349L5.71507 5.002L5.00007 5.001Z"></path></svg>
                        <svg class="w-35 absolute top-1/2 -right-35 -translate-1/2 text-black/10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M17.4563 3L20.9991 3.00335L21.001 6.52648L15.5341 11.992L18.3624 14.8207L19.7772 13.4071L21.1915 14.8213L18.7166 17.2962L21.545 20.1246L20.1308 21.5388L17.3024 18.7104L14.8275 21.1853L13.4133 19.7711L14.8269 18.3562L11.9981 15.528L9.1703 18.3558L10.5849 19.7711L9.17064 21.1853L6.69614 18.71L3.86734 21.5388L2.45312 20.1246L5.28192 17.2958L2.80668 14.8213L4.22089 13.4071L5.63477 14.8202L8.46212 11.992L3.00181 6.53118L2.99907 3L6.54506 3.00335L11.9981 8.457L17.4563 3ZM9.87612 13.406L7.04807 16.234L7.75607 16.941L10.5831 14.113L9.87612 13.406ZM19.0001 5.001H18.2831L13.4121 9.87L14.1191 10.577L19.0001 5.698V5.001ZM5.00007 5.001V5.701L16.2411 16.942L16.9482 16.2349L5.71507 5.002L5.00007 5.001Z"></path></svg>

                        <div class="flex flex-col items-start mt-4">
                            <div class="bg-[#161e31] inline-flex">
                                <h1 class="text-white text-lg">CONTINUE</h1>
                            </div>

                            <div class="text-lg">
                                <h1>STAGE 1-3</h1>
                            </div>
                        </div>

                        <div class="absolute -bottom-5 -right-35 w-70 h-2 bg-accent rounded-lg group-hover:scale-110 transition duration-200"></div>
                    </div>
                </button>

                <div class="w-full flex gap-4 -rotate-x-30 -rotate-y-45">
                    <a href=""
                        class="w-full bg-white btn-shadowwhite hover:scale-105 text-[#161e31] text-4xl font-bold p-4 rounded-sm shadow-xl transition duration-200">
                        <div class="w-full flex justify-around">
                            <h1>SHOP</h1>
                            <svg class="w-20 text-black/20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M6.00488 9H19.9433L20.4433 7H8.00488V5H21.7241C22.2764 5 22.7241 5.44772 22.7241 6C22.7241 6.08176 22.7141 6.16322 22.6942 6.24254L20.1942 16.2425C20.083 16.6877 19.683 17 19.2241 17H5.00488C4.4526 17 4.00488 16.5523 4.00488 16V4H2.00488V2H5.00488C5.55717 2 6.00488 2.44772 6.00488 3V9ZM6.00488 23C4.90031 23 4.00488 22.1046 4.00488 21C4.00488 19.8954 4.90031 19 6.00488 19C7.10945 19 8.00488 19.8954 8.00488 21C8.00488 22.1046 7.10945 23 6.00488 23ZM18.0049 23C16.9003 23 16.0049 22.1046 16.0049 21C16.0049 19.8954 16.9003 19 18.0049 19C19.1095 19 20.0049 19.8954 20.0049 21C20.0049 22.1046 19.1095 23 18.0049 23Z"></path></svg>
                        </div>
                    </a>
                    <a href=""
                        class="group w-full bg-white btn-shadowwhite hover:scale-105 text-[#161e31] text-4xl font-bold p-4 rounded-sm shadow-xl transition duration-200">
                        <div class="relative w-full flex justify-around">
                            <h1>LOGOUT</h1>
                            <svg class="w-20 text-black/20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M6.26489 3.80698L7.41191 5.44558C5.34875 6.89247 4 9.28873 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 9.28873 18.6512 6.89247 16.5881 5.44558L17.7351 3.80698C20.3141 5.61559 22 8.61091 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 8.61091 3.68594 5.61559 6.26489 3.80698ZM11 12V2H13V12H11Z"></path></svg>
                            <div class="absolute -bottom-5 w-50 h-2 bg-accent rounded-lg group-hover:scale-110 transition duration-200"></div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <form action="{{ route('dungeon') }}" method="POST"
            x-show="open"
            x-transition
            @click.away="open = false"
            class="fixed top-1/2 left-1/2 -translate-1/2 max-w-4xl w-full flex rounded-xl bg-white text-black shadow-xl overflow-hidden">
            @csrf
            
            <div class="w-full">
                <img 
                    class="w-full h-full object-cover"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRV518gHSa0gOUqNjb0D-RItrRNYDV3cfziiA&s" alt="">
            </div>

            <div class="p-6 w-full">
                <h1 class="text-3xl font-semibold text-center">Welcome to Dungeon!</h1>
                <p class="mt-4">This is where you can get <span>Coins</span>, <span>Items</span>, or much more! but you must spend stamina for entering the dungeon.</p>

                <div class="mt-20 flex justify-around">
                    <div>
                        <h1>Explore x1</h1>
                        <p class="flex items-center gap-1 text-red-500 text-xl">
                            <img class="w-9 h-9 object-cover" src="https://static.vecteezy.com/system/resources/thumbnails/021/013/590/small/icon-of-energy-thunder-lightning-bolt-symbol-or-electricity-power-electric-sign-symbol-free-png.png" alt=""
                            >-20</p>
                    </div>

                    <div>
                        <h1>Possible rewards</h1>
                        <p class="flex items-center gap-1 text-yellow-500 text-xl">
                            <svg class="w-9 text-black/70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12.0049 22.0027C6.48204 22.0027 2.00488 17.5256 2.00488 12.0027C2.00488 6.4799 6.48204 2.00275 12.0049 2.00275C17.5277 2.00275 22.0049 6.4799 22.0049 12.0027C22.0049 17.5256 17.5277 22.0027 12.0049 22.0027ZM8.50488 14.0027V16.0027H11.0049V18.0027H13.0049V16.0027H14.0049C15.3856 16.0027 16.5049 14.8835 16.5049 13.5027C16.5049 12.122 15.3856 11.0027 14.0049 11.0027H10.0049C9.72874 11.0027 9.50488 10.7789 9.50488 10.5027C9.50488 10.2266 9.72874 10.0027 10.0049 10.0027H15.5049V8.00275H13.0049V6.00275H11.0049V8.00275H10.0049C8.62417 8.00275 7.50488 9.12203 7.50488 10.5027C7.50488 11.8835 8.62417 13.0027 10.0049 13.0027H14.0049C14.281 13.0027 14.5049 13.2266 14.5049 13.5027C14.5049 13.7789 14.281 14.0027 14.0049 14.0027H8.50488Z"></path></svg>
                        20</p>
                    </div>
                </div>
                
                <div class="flex flex-col justify-center items-center mt-4">
                    <button class="w-full py-3 bg-accent btn-shadow font-semibold rounded-lg transition duration-200 cursor-pointer">Explore</button>
                </div>
            </div>
        </form>
    </main>
</body>
</html>