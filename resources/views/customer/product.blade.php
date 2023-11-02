<div class="w-full h-full flex justify-around flex-col p-9">
    <div class="w-full flex self-center justify-center text-4xl m-4">
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
                <img src="{{ asset('assets/images/product/' . $pd->id . '.png') }}" alt="" class="w-[150px] h-fit">
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
                <img src="{{ asset('assets/images/product/' . $pd->id . '.png') }}" alt="" class="w-[150px] h-fit pt-6">
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
                <img src="{{ asset('assets/images/product/' . $pd->id . '.png') }}" alt="" class="w-[150px] h-fit pt-4">
            </div>
        @endforeach
    </div>
    <div class="w-full flex self-center justify-center text-4xl m-4">
        <p class="font-bold">Our Products</p>
    </div>
    <div class="grid grid-cols-3 gap-4 w-full justify-items-center">
        @foreach ($product as $pd)
        <div class="flex flex-col justify-center bg-slate-100 p-3 hover:shadow-[#252525] hover:shadow-md">
            <img src="{{ asset('assets/images/product/' . $pd->id . '.png') }}" alt="" class="w-[250px] h-[150px] pt-4">
            <div class="w-full h-full flex flex-row justify-between">
                <div class="flex flex-col h-full justify-center text-black">
                    <p>{{ $pd->name }}</p>
                    <p>Rp.{{ $pd->price }}</p>
                </div>
                <div class="flex flex-col h-full justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                      </svg>
                </div>
            </div>
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
</div>
