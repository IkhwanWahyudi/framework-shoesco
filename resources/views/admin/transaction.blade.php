@extends('layouts.landing')

@section('content')
    @include('admin.navbar')
    <div class="w-full h-full flex">
        <div class="w-full flex flex-col bg-[#985d44]">
            <div class="h-auto m-4 p-8 bg-white rounded-lg drop-shadow-md">
                <p class="text-4xl font-bold mb-4 text-[#985d44]">Transaction History</p>
                <hr><br>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-[#985d44] uppercase bg-gray-300">
                            <tr class="items-center">
                                <th scope="col" class="px-6 py-3">
                                    ID Account
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Product ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Size
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Quantity
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Total Price
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaction as $tr)
                                <tr class="bg-white border-b hover:bg-[#5f7251] text-black font-medium hover:text-white">
                                    <th scope="row" class="px-6 py-4 whitespace-nowrap">
                                        {{ $tr->id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $tr->product_id }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $tr->product_size }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $tr->quantity }} pcs
                                    </td>
                                    <td class="px-6 py-4">
                                        Rp. {{ $tr->total_price }}
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
