<section class="flex flex-col items-center bg-white text-black w-full p-4 mt-10 rounded-lg">
    <h1 class="text-xl font-semibold">This is Shop</h1>
    <p>Buy anything you want.</p>

    @error('record')
        <p class="text-red-500"> {{ $message }} </p>
    @enderror

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
