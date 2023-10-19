@extends('layouts.landing')

@section('content')
    @include('admin.navbar')
    <div class="w-full h-full flex">
        <div class="w-full flex flex-col bg-[#985d44]">
            <div class="h-auto m-4 p-8 bg-white rounded-lg drop-shadow-md">
                <p class="text-4xl font-bold mb-4 text-[#985d44]">Shoes Collection</p>
                <hr><br>
                <div class="w-full h-auto flex justify-end">
                    <button
                        class="px-4 py-2 bg-[#5f7251] hover:bg-[#546548] rounded-md text text-black hover:text-white font-semibold">Add</button>
                </div><br>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-[#985d44] uppercase bg-gray-300">
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
                                <tr class="bg-white border-b hover:bg-[#5f7251] text-black font-medium hover:text-white">
                                    <th scope="row" class="px-6 py-4 whitespace-nowrap">
                                        {{ $pd->id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        Rp. {{ $pd->price }}
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
                                        {{ $pd->amount }} pcs
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="w-full h-auto flex justify-around">
                                            <button
                                                class="px-4 py-2 bg-yellow-300 rounded-md text-black hover:bg-yellow-500 hover:text-white font-semibold">Edit</button>
                                            <button
                                                class="px-4 py-2 bg-red-600 rounded-md text-black hover:bg-red-800 hover:text-white font-semibold">Delete</button>
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
