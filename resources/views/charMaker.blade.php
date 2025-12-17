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

<body class="body min-h-screen flex items-center justify-center text-white">

    <section>
        <div class="max-w-md w-full bg-blacklight py-4 px-10 rounded-xl mb-4">
            <h1 class="text-2xl font-bold mb-1 text-center">Welcome Hero!</h1>
            <p class="text-white/70">Please select your Hero and Create your profile.</p>
        </div>

        <form action="/charMaker" method="POST"
            class="max-w-md w-full bg-blacklight py-4 px-10 rounded-xl">
            @csrf

            <div class="flex flex-col justify-center">
                <div class="flex items-center mb-8 gap-2">
                    <img src="https://zzz.honeyhunterworld.com/img/character/1321-char_avatar_icon_70.webp" alt="">
                    <div class="nick w-full">
                        <input type="text" name="name" placeholder="Your Name"
                            class="w-full pb-1 py-4 border-b-2 border-[#fab17b] outline-none caret-white">
                    </div>
                </div>

                <div class="text-center font-bold mb-4">
                    <h1>STATS</h1>
                </div>

                <div class="flex flex-col gap-2 mb-8">
                    <div class="flex items-center gap-2">
                        <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12.001 4.52853C14.35 2.42 17.98 2.49 20.2426 4.75736C22.5053 7.02472 22.583 10.637 20.4786 12.993L11.9999 21.485L3.52138 12.993C1.41705 10.637 1.49571 7.01901 3.75736 4.75736C6.02157 2.49315 9.64519 2.41687 12.001 4.52853Z"></path></svg>
                        <h1 class="uppercase font-semibold">hp : 100</h1>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M3.78307 2.82598L12 1L20.2169 2.82598C20.6745 2.92766 21 3.33347 21 3.80217V13.7889C21 15.795 19.9974 17.6684 18.3282 18.7812L12 23L5.6718 18.7812C4.00261 17.6684 3 15.795 3 13.7889V3.80217C3 3.33347 3.32553 2.92766 3.78307 2.82598Z"></path></svg>
                        <h1 class="uppercase font-semibold">def : 50</h1>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M7.04813 13.4061L10.5831 16.9421L9.1703 18.3558L10.5849 19.7711L9.17064 21.1853L6.69614 18.71L3.86734 21.5388L2.45312 20.1246L5.28192 17.2958L2.80668 14.8213L4.22089 13.4071L5.63477 14.8202L7.04813 13.4061ZM2.99907 3L6.54506 3.00335L18.3624 14.8207L19.7772 13.4071L21.1915 14.8213L18.7166 17.2962L21.545 20.1246L20.1308 21.5388L17.3024 18.7104L14.8275 21.1853L13.4133 19.7711L14.8269 18.3562L3.00181 6.53118L2.99907 3ZM17.4563 3.0001L20.9991 3.00335L21.001 6.52648L16.9481 10.5781L13.4121 7.0431L17.4563 3.0001Z"></path></svg>
                        <h1 class="uppercase font-semibold">atk : 50</h1>
                    </div>
                </div>
            </div>
            <button type="submit" class="w-full py-2 bg-accent btn-shadow rounded-lg text-[#161e31] font-semibold cursor-pointer">Create!</button>
        </form>
    </section>

    <div class="relative">
        <img src="https://zzz.gg/_ipx/w_550&q_70/images/IconRole37.png" alt="">
        <div class="absolute bottom-0 left-0 w-full h-150 bg-linear-to-t from-[#161e31] to-transparent"></div>
        <div class="absolute bottom-0 right-0 flex">
            <a href="" class="group">
                <img src="https://zzz.honeyhunterworld.com/img/character/1321-char_char_battle_icon_70.webp" alt=""
                    class="group-hover:bg-[#fab17b] rounded-lg">
            </a>
            <a href="" class="group">
                <img src="https://zzz.honeyhunterworld.com/img/character/1091-char_char_battle_icon_70.webp" alt=""
                    class="group-hover:bg-[#fab17b] rounded-lg">
            </a>
            <a href="" class="group">
                <img src="https://zzz.honeyhunterworld.com/img/character/1371-char_char_battle_icon_70.webp" alt=""
                    class="group-hover:bg-[#fab17b] rounded-lg">
            </a>
        </div>
    </div>
</body>

</html>
