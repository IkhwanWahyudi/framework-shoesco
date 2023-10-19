<div class="w-full h-full flex justify-around flex-col p-9">
    <div class="w-full flex self-center justify-center text-4xl p-">
        <p class="font-bold">New Arrivals</p>
    </div>
    <div class="w-full flex self-center justify-around flex-row">
        @foreach ($product->take(1) as $pd)
            <div class="w-[300px] flex flex-row justify-around bg-[#e8a12b] rounded-lg">
                <div class="w-[150px] flex flex-col justify-around items-center text-white">
                    <p>{{ $pd->name }}</p>
                    <a href="" class="group flex flex-row gap-3">
                        Shop now
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6 group-hover:translate-x-[50%] group-hover:duration-150 group-hover:ease-in-out">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                </div>
                <img src="{{ asset('assets/images/product/yellow.png') }}" alt="" class="w-[150px] h-fit">
            </div>
        @endforeach
        @foreach ($product->slice(1, 1) as $pd)
            <div class="w-[300px] flex flex-row justify-around bg-[#663b2a] rounded-lg">
                <div class="w-[150px] flex flex-col justify-around items-center text-white">
                    <p>{{ $pd->name }}</p>
                    <a href="" class="group flex flex-row gap-3">
                        Shop now
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6 group-hover:translate-x-[50%] group-hover:duration-150 group-hover:ease-in-out">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                </div>
                <img src="{{ asset('assets/images/product/brown.png') }}" alt="" class="w-[150px] h-fit pt-6">
            </div>
        @endforeach
        @foreach ($product->slice(2, 1) as $pd)
            <div class="w-[300px] flex flex-row justify-around bg-[#5f7251] rounded-lg">
                <div class="w-[150px] flex flex-col justify-around items-center text-white">
                    <p>{{ $pd->name }}</p>
                    <a href="" class="group flex flex-row gap-3">
                        Shop now
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6 group-hover:translate-x-[50%] group-hover:duration-150 group-hover:ease-in-out">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                </div>
                <img src="{{ asset('assets/images/product/green.png') }}" alt="" class="w-[150px] h-fit pt-4">
            </div>
        @endforeach
    </div>
    <div class="w-full pt-8 flex flex-col justify-around relative">
        <img src="{{ asset('assets/images/product/big-product.png') }}" alt="" class="h-fit -z-10">
        <marquee behavior="" direction="" class="w-full absolute z-30">
            <div class="flex flex-row justify-around h-[200px]">
                @foreach ($product->take(1) as $pd)
                <a href="" class="group flex flex-row gap-3 bg-white hover:bg-black hover:text-white h-[25px] pr-5 pl-5 rounded-lg ease-in-out">
                    {{ $pd->name }}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6 group-hover:translate-x-[50%] group-hover:duration-150 group-hover:ease-in-out">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
                @endforeach
                @foreach ($product->slice(1, 1) as $pd)
                <a href="" class="group flex flex-row gap-3 bg-white hover:bg-black hover:text-white h-[25px] pr-5 pl-5 rounded-lg ease-in-out">
                    {{ $pd->name }}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6 group-hover:translate-x-[50%] group-hover:duration-150 group-hover:ease-in-out">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
                @endforeach
                @foreach ($product->slice(2, 1) as $pd)
                <a href="" class="group flex flex-row gap-3 bg-white hover:bg-black hover:text-white h-[25px] pr-5 pl-5 rounded-lg ease-in-out">
                    {{ $pd->name }}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6 group-hover:translate-x-[50%] group-hover:duration-150 group-hover:ease-in-out">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
                @endforeach
            </div>
        </marquee>
    </div>
    {{-- @foreach ($product as $pd) --}}
    {{-- @endforeach --}}
</div>
