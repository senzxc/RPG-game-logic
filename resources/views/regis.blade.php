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
        <form action="/regis" method="POST"
            class="px-17 py-8 w-full">
            @csrf

            @error('record') <p class="text-red-500"> {{ $message }} </p> @enderror

            <div class="flex gap-10 mb-15">
                <a href="/login" class="px-2 {{ request()->routeIs('login') ? 'border-b-2 border-[#fab17b]' : '' }}">
                    <h1 class="text-sm mb-1">Sign In</h1>
                </a>
                
                <a href="#" class="px-2 {{ request()->routeIs('regis') ? 'border-b-2 border-[#fab17b]' : '' }}">
                    <h1 class="text-sm mb-1">Sign Up</h1>
                </a>
            </div>

            <div class="flex flex-col gap-2 mb-8">
                <h1 class="text-3xl font-semibold">Welcome Stranger! </h1>
                <p class="text-white/70">Let's start our journey together.</p>
            </div>

            <div class="flex flex-col gap-2 mb-4">
                <div class="relative">
                    <label for="email" class="absolute left-4 top-2 text-sm text-white/50">Email</label>
                    <input type="text" id="email" name="email" autofocus
                        class="pt-7 pb-2 px-4 w-full caret-white bg-white/10 rounded-xs outline-none border-l-3 border-[#424762] focus:border-[#f4b27e] transition duration-200">
                </div>
                @error('email') <p class="text-red-500"> {{ $message }} </p> @enderror
                
                <div class="relative">
                    <label for="pw" class="absolute left-4 top-2 text-sm text-white/50">Password</label>
                    <input type="password" id="pw" name="password"
                        class="pt-7 pb-2 px-4 w-full caret-white bg-white/10 rounded-xs outline-none border-l-3 border-[#424762] focus:border-[#f4b27e] transition duration-200">
                    <button type="button" onclick="showPw()" class="absolute top-1/2 -translate-1/2 right-0" tabindex="-1">
                        <svg id="show" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-icon lucide-eye"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/><circle cx="12" cy="12" r="3"/></svg>
                        <svg id="hide" class="hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-closed-icon lucide-eye-closed"><path d="m15 18-.722-3.25"/><path d="M2 8a10.645 10.645 0 0 0 20 0"/><path d="m20 15-1.726-2.05"/><path d="m4 15 1.726-2.05"/><path d="m9 18 .722-3.25"/></svg>
                    </button>
                </div>
                @error('password') <p class="text-red-500"> {{ $message }} </p> @enderror
                
                <div class="relative">
                    <label for="pw" class="absolute left-4 top-2 text-sm text-white/50">Confirm Password</label>
                    <input type="password" id="pw2" name="password_confirmation"
                        class="pt-7 pb-2 px-4 w-full caret-white bg-white/10 rounded-xs outline-none border-l-3 border-[#424762] focus:border-[#f4b27e] transition duration-200">
                    <button type="button" onclick="showPw2()" class="absolute top-1/2 -translate-1/2 right-0" tabindex="-1">
                        <svg id="show2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-icon lucide-eye"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/><circle cx="12" cy="12" r="3"/></svg>
                        <svg id="hide2" class="hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-closed-icon lucide-eye-closed"><path d="m15 18-.722-3.25"/><path d="M2 8a10.645 10.645 0 0 0 20 0"/><path d="m20 15-1.726-2.05"/><path d="m4 15 1.726-2.05"/><path d="m9 18 .722-3.25"/></svg>
                    </button>
                </div>
                @error('password_confirmation') <p class="text-red-500"> {{ $message }} </p> @enderror
            </div>

            <script>
                const iconShow = document.getElementById('show');
                const iconHide = document.getElementById('hide');

                function showPw() {
                    const input = document.getElementById('pw')
                    input.type = input.type === 'password' ? 'text' : 'password'

                    iconShow.classList.toggle('hidden')
                    iconHide.classList.toggle('hidden')
                }

                const iconShow2 = document.getElementById('show2');
                const iconHide2 = document.getElementById('hide2');

                function showPw2() {
                    const input = document.getElementById('pw2')
                    input.type = input.type === 'password' ? 'text' : 'password'

                    iconShow2.classList.toggle('hidden')
                    iconHide2.classList.toggle('hidden')
                }
            </script>
            
            <div class="flex justify-between mb-8">
                <div class="flex gap-2">
                    <input type="checkbox" name="remember" id="remember"
                        class="accent-[#fab17b] scale-120">
                    <label for="remember">Remember me</label>
                </div>
                <a href="/login" class="text-white/70 hover:text-[#fab17b]">Already have acc?</a>
            </div>

            <div class="grid grid-cols-2">
                <button class="py-2 px-4 bg-[#f4b27e] rounded-md text-[#161e31] font-semibold btn-shadow transition duration-200 cursor-pointer" type="submit">Register</button>
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