@extends('layouts.landing')

@section('content')
    <nav id="scroll-bg"
        class="z-50 grid grid-flow-col w-full content-center sticky justify-around bg-transparent top-0 backdrop-blur-[2px]">
        <div
            class="grid justify-around grid-flow-col content-center self-center bg-transparent w-48 h-14 rounded-lg border-4 border-black opacity-80 border-double hover:shadow-sm hover:shadow-black transition ease-in">
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </a>
            <p class="text-black">|</p>
            <a href="{{ route('home') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
            </a>
            <p class="text-black">|</p>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>

            </a>
        </div>
        <a href="{{ route('home') }}" class="flex justify-center bg-transparent opacity-80 w-full">
            <img src="{{ asset('assets/images/logo-black.png') }}" alt="Logo Shoes.co" class="w-fit h-[100px] top-3">
        </a>
        <div id="day-contact"
            class="bg-transparent grid justify-around grid-flow-col content-center self-center w-52 h-14 text-black font-semibold opacity-80">
            <p id="dayOfWeek"></p>
            <p class="text-black">|</p>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="black" class="w-6 h-6 transition ease-in">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
            </a>
        </div>
    </nav>
    <div class="w-full h-full flex">
        <div class="w-full flex flex-col bg-[#985d44]">
            <div class="h-auto m-4 p-8 bg-white rounded-lg drop-shadow-md">
                <p class="text-4xl font-bold mb-4 text-[#985d44]">Shoes Collection</p>
                <hr><br>
                <div class="w-full h-auto flex justify-end">
                    <button class="px-4 py-2 bg-[#5f7251] hover:bg-[#546548] rounded-md text text-white">Tambah</button>
                </div><br>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-[#985d44] uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Color
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Brand
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Size
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Amount
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $pd)
                                <tr class="bg-white border-b hover:bg-[#5f7251] hover:text-white">
                                    <th scope="row" class="px-6 py-4 font-medium text- whitespace-nowrap">
                                        {{ $pd->id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $pd->price }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $pd->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $pd->color }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $pd->brand }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $pd->size }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $pd->amount }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="w-full h-auto flex justify-around">
                                            <button class="px-4 py-2 bg-yellow-300 rounded-md text-black hover:bg-yellow-500 hover:text-white">Edit</button>
                                            <button class="px-4 py-2 bg-red-600 rounded-md text-black hover:bg-red-800 hover:text-white">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('components.script')
@endsection
