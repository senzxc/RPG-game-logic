<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>
<body class="min-h-screen max-w-4xl w-full bg-black/90 text-white flex flex-col items-center mx-auto p-4">
    <main 
        x-data="{ open: false }"
        class="flex flex-col justify-center items-center">
        <h1 class="text-3xl font-bold">Welcome <span class="text-blue-500">{{ $char->name }}</span>!</h1>
        <p class="text-lg">This is save point, buy or sell anything you want.</p>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit"
                class="bg-red-400 py-1 px-3 mt-4 rounded-lg cursor-pointer">logot</button>
        </form>

        <section class="flex flex-col items-center bg-white text-black w-full p-4 mt-10 rounded-lg">
            <h1 class="text-xl font-semibold">this is your main stats</h1>
            <p>upgrade your stats and grinding to level up!</p>

            <div class="flex gap-4">
                <p>hp: <span class="text-green-500">{{ $char->hp }}</span></p>
                <p>atk: <span class="text-green-500">{{ $char->atk }}</span></p>
                <p>coins: <span class="text-green-500">{{ $char->coins }}</span></p>
                <p>stamina: <span class="text-green-500">{{ $char->stamina }}</span></p>
            </div>
        </section>
        
        <section class="flex flex-col items-center bg-white text-black w-full p-4 mt-10 rounded-lg">
            <h1 class="text-xl font-semibold">This is Shop</h1>
            <p>Buy anything you want.</p>

            @error('record') <p class="text-red-500"> {{ $message }} </p> @enderror

            <div class="grid grid-cols-2 mt-8 gap-8">
                <form action="{{ route('buy') }}" method="POST">
                    @csrf
                    
                    <div class="text-center w-full">
                        <p>atk <span class="text-green-500">+5</span></p>
                        <input type="hidden" name="item" value="atk">
                        <p>price <span class="text-red-500">5 coins</span></p>
                        <button class="bg-[#eee] w-full py-1 rounded-lg cursor-pointer">buy</button>
                    </div>
                </form>
                <form action="{{ route('buy') }}" method="POST">
                    @csrf
                    
                    <div class="text-center w-full">
                        <p>hp <span class="text-green-500">+10</span></p>
                        <input type="hidden" name="item" value="hp">
                        <p>price <span class="text-red-500">5 coins</span></p>
                        <button class="bg-[#eee] w-full py-1 rounded-lg cursor-pointer">buy</button>
                    </div>
                </form>
            </div>
        </section>

        <section class="flex flex-col items-center bg-white text-black w-full p-4 mt-10 rounded-lg">
            <h1 class="text-xl font-semibold">This is Dungeon</h1>
            <p>explore the dungeon and get the coins!</p>

            <article class="mt-5">
                <div>
                    @csrf

                    <button 
                        @click="open = !open"
                        class="bg-[#eee] w-full py-1 px-4 rounded-lg cursor-pointer">info</button>
                </div>
            </article>
        </section>

        <form action="{{ route('dungeon') }}" method="POST"
            x-show="open"
            x-transition
            @click.away="open = false"
            class="fixed top-1/2 left-1/2 -translate-1/2 max-w-2xl w-full flex rounded-xl bg-white text-black overflow-hidden">
            @csrf
            
            <div class="w-full">
                <img 
                    class="w-full h-full object-cover"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRV518gHSa0gOUqNjb0D-RItrRNYDV3cfziiA&s" alt="">
            </div>

            <div class="p-6 w-full">
                <h1 class="text-xl font-semibold text-center">Welcome to Dungeon <span class="text-green-500">{{ $char->name }}</span>!</h1>
                <p class="mt-4">This is where you can get <span>Coins</span>, <span>Items</span>, or much more! but you must spend stamina for entering the dungeon.</p>

                <div class="mt-6 flex justify-around">
                    <div>
                        <h1>Explore x1</h1>
                        <p class="text-red-500">20 Stamina</p>
                    </div>

                    <div>
                        <h1>Possible rewards:</h1>
                        <p><span class="text-yellow-500">Coins</span> x20</p>
                    </div>
                </div>
                
                <div class="flex flex-col justify-center items-center mt-4">
                    <h1>Your Stam: <span class="text-green-500"> {{ $char->stamina }} </span></h1>
                    <button class="w-full py-1 bg-[#eee] rounded-lg cursor-pointer">Explore!</button>
                </div>
            </div>
        </form>
    </main>
</body>
</html>