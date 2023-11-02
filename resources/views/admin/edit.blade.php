@extends('layouts.landing')

@section('content')
    @include('admin.navbar')
    <div class="w-full h-full flex">
        <div class="w-full flex flex-col bg-yellow-400">
            <div class="w-auto h-auto m-4 p-8 bg-white rounded-lg drop-shadow-md self-center">
                <p class="text-4xl font-bold mb-4 text-yellow-400 text-center">Edit Shoe</p>
                <hr><br>
                <form action="{{ route('admin.update', $products->id) }}" method="post" class="w-full flex flex-col items-center">
                    @csrf
                    <div class="h-auto flex flex-col gap-2">
                        <div class="flex flex-row">
                            <p class="w-[100px] text-yellow-400">Name</p>
                            <p class="w-[20px] text-yellow-400">:</p>
                            <input type="text" name="name" id="" value="{{ $products->name }}"
                                class="w-[500px] bg-slate-50 rounded-sm ring-1 ring-yellow-400 focus:outline-none">
                        </div>
                        <div class="flex flex-row">
                            <p class="w-[100px] text-yellow-400">Price</p>
                            <p class="w-[20px] text-yellow-400">:</p>
                            <input type="text" name="price" id="" value="{{ $products->price }}"
                                class="w-[500px] bg-slate-50 rounded-sm ring-1 ring-yellow-400 focus:outline-none">
                        </div>
                        <div class="flex flex-row">
                            <p class="w-[100px] text-yellow-400">Color</p>
                            <p class="w-[20px] text-yellow-400">:</p>
                            <input type="text" name="color" id="" value="{{ $products->color }}"
                                class="w-[500px] bg-slate-50 rounded-sm ring-1 ring-yellow-400 focus:outline-none">
                        </div>
                        <div class="flex flex-row">
                            <p class="w-[100px] text-yellow-400">Brand</p>
                            <p class="w-[20px] text-yellow-400">:</p>
                            <input type="text" name="brand" id="" value="{{ $products->brand }}"
                                class="w-[500px] bg-slate-50 rounded-sm ring-1 ring-yellow-400 focus:outline-none">
                        </div>
                        <div class="flex flex-row">
                            <p class="w-[100px] text-yellow-400">Size</p>
                            <p class="w-[20px] text-yellow-400">:</p>
                            <input type="text" name="size" id="" value="{{ $products->size }}"
                                class="w-[500px] bg-slate-50 rounded-sm ring-1 ring-yellow-400 focus:outline-none">
                        </div>
                        <div class="flex flex-row">
                            <p class="w-[100px] text-yellow-400">Amount</p>
                            <p class="w-[20px] text-yellow-400">:</p>
                            <input type="text" name="amount" id="" value="{{ $products->amount }}"
                                class="w-[500px] bg-slate-50 rounded-sm ring-1 ring-yellow-400 focus:outline-none">
                        </div>
                        {{-- <div class="flex flex-row">
                            <p class="w-[100px] text-yellow-400">Photo</p>
                            <p class="w-[20px] text-yellow-400">:</p>
                            <img src="{{ asset('assets/images/product/' . $products->image_path) }}" alt="" class="w-[200px] h-[100px]">
                            <input type="file" name="image" id="" class="text-yellow-400">
                        </div> --}}
                        <div class="flex flex-row">
                            <p class="w-[100px] text-yellow-400">Description</p>
                            <p class="w-[20px] text-yellow-400">:</p>
                            <textarea name="description" id=""
                                class="w-[500px] bg-slate-50 rounded-sm ring-1 ring-yellow-400 focus:outline-none">{{ old('description', $products->description) }}</textarea>
                        </div>
                    </div>
                    <button type="submit"
                        class="w-[200px] h-auto py-4 mt-16 text-black font-semibold hover:text-white bg-yellow-400 rounded-md flex justify-center items-center hover:bg-yellow-500">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @include('components.script')
@endsection
