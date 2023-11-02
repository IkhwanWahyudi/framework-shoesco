<div class="relative w-full">
    <nav id="scroll-bg"
        class="z-50 grid grid-flow-col w-full content-center justify-around fixed bg-transparent top-0 backdrop-blur-[2px]">
        <div
            class="grid justify-around grid-flow-col content-center self-center bg-transparent w-48 h-14 rounded-lg border-4 border-white opacity-80 border-double hover:bg-[rgba(0,0,0,0.13)] hover:shadow-sm hover:shadow-black transition ease-in">
            <a href="{{ route('home') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="white" class="w-6 h-6 hover:stroke-[#985d44] transition ease-in">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
            </a>
            <p class="text-white">|</p>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="white" class="w-6 h-6 hover:stroke-[#985d44] transition ease-in">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
            </a>
            <p class="text-white">|</p>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="white" class="w-6 h-6 hover:stroke-[#985d44] transition ease-in">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
            </a>
        </div>
        <a href="" class="flex justify-center bg-transparent opacity-80 w-full">
            <img src="{{ asset('assets/images/logo-white.png') }}" alt="Logo Shoes.co" class="w-fit h-[100px] top-3">
        </a>
        <div id="day-contact"
            class="bg-transparent grid justify-around grid-flow-col content-center self-center w-52 h-14 text-white opacity-80">
            <p id="dayOfWeek" class="font-semibold"></p>
        </div>
    </nav>
    <div class="absolute w-[100%] h-[100%] bg-[#000000ac]">
        <div
            class="w-full h-full flex flex-col self-center place-content-center text-center gap-7 rounded-lg z-40  mt-20">
            <p class="text-6xl self-center font-medium text-white">Accompanying at every step</p>
            <a href="{{ route('login') }}"
                class="bg-white hover:bg-black hover:text-white w-[200px] h-[50px] font-semibold self-center text-center rounded-[25px] text-[22px] transition ease-in py-2">Shop
                Now</a>
            <div
                class="w-[750px] h-[100px] flex flex-row justify-around place-content-center self-center bg-[#ffffff3e] rounded-[20px] z-40 p-3 mt-20">
                <img src="{{ asset('assets/images/converse-logo.png') }}" alt="" class="w-[150px] h-fit">
                <img src="{{ asset('assets/images/nb-logo.png') }}" alt="" class="w-[100px] h-fit pt-2">
                <img src="{{ asset('assets/images/nike-logo.png') }}" alt="" class="w-[100px] h-fit">
                <img src="{{ asset('assets/images/adidas-logo.png') }}" alt="" class="w-[100px] h-fit">
                <img src="{{ asset('assets/images/puma-logo.png') }}" alt="" class="w-[100px] h-fit pt-2">
            </div>
        </div>
    </div>
    <img src="{{ asset('assets/images/background.png') }}" alt="" class="w-full h-full object-cover -z-10">
</div>
