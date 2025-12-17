<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.cdnfonts.com/css/raleway-5" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>
<body class="min-h-screen flex flex-col justify-center items-center bg-[#161e31] text-white">
    <div class="max-w-4xl w-full flex bg-[#2d3250] rounded-2xl shadow-2xl overflow-hidden">
        <form action="/login" method="POST"
            class="px-17 py-8 w-full">
            @csrf

            @error('record') <p class="text-red-500"> {{ $message }} </p> @enderror

            <div class="flex gap-10 mb-15">
                <a href="#" class="px-2 {{ request()->routeIs('login') ? 'border-b-2 border-[#fab17b]' : '' }}">
                    <h1 class="text-sm mb-1">Sign In</h1>
                </a>
                
                <a href="/regis" class="px-2 {{ request()->routeIs('regis') ? 'border-b-2 border-[#fab17b]' : '' }}">
                    <h1 class="text-sm mb-1">Sign Up</h1>
                </a>
            </div>

            <div class="flex flex-col gap-2 mb-8">
                <h1 class="text-3xl font-semibold">Welcome back Stranger! </h1>
                <p class="text-white/70">Let's continue our journey together.</p>
            </div>

            <div class="flex flex-col gap-2 mb-4">
                <div class="relative">
                    <label for="email" class="absolute left-4 top-2 text-sm text-white/50">Email</label>
                    <input type="text" id="email" name="email" autofocus
                        class="pt-7 pb-2 px-4 w-full caret-white bg-white/10 rounded-xs outline-none border-l-3 border-[#424762] focus:border-[#f4b27e] transition duration-200">
                    @error('email') <p class="text-red-500"> {{ $message }} </p> @enderror
                </div>
                
                <div class="relative">
                    <label for="pw" class="absolute left-4 top-2 text-sm text-white/50">Password</label>
                    <input type="password" id="pw" name="password"
                        class="pt-7 pb-2 px-4 w-full caret-white bg-white/10 rounded-xs outline-none border-l-3 border-[#424762] focus:border-[#f4b27e] transition duration-200">
                    @error('password') <p class="text-red-500"> {{ $message }} </p> @enderror
                </div>
            </div>
            
            <div class="flex justify-between mb-8">
                <div class="flex gap-2">
                    <input type="checkbox" name="remember" id="remember"
                        class="accent-[#fab17b] scale-120">
                    <label for="remember">Remember me</label>
                </div>
                <a href="/regis" class="text-white/70 hover:text-[#fab17b]">Don't have acc yet?</a>
            </div>

            <div class="grid grid-cols-2">
                <button class="py-2 px-4 bg-[#f4b27e] rounded-md text-[#161e31] font-semibold btn-shadow transition duration-200 cursor-pointer" type="submit">Login</button>
            </div>

            <div class="h-20"></div>
        </form>
        
        <div class="w-full">
            <img src="https://i.pinimg.com/736x/39/90/1f/39901fd23aafb6a2c8d8e5f4f1a48788.jpg" alt=""
                class="w-full h-full object-cover">
        </div>
    </div>
</body>
</html>