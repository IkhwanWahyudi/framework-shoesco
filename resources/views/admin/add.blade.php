@extends('layouts.landing')

@section('content')
    @include('admin.navbar')
    <div class="w-full h-full flex">
        <div class="w-full flex flex-col bg-[#5f7251]">
            <div class="w-auto h-auto m-4 p-8 bg-white rounded-lg drop-shadow-md self-center">
                <p class="text-4xl font-bold mb-4 text-[#5f7251] text-center">Add Shoe</p>
                <hr><br>
                <form action="{{ route('admin.store') }}" method="post" class="w-full flex flex-col items-center" enctype="multipart/form-data">
                    @csrf
                    <div class="h-auto flex flex-col gap-2">
                        <div class="flex flex-row">
                            <p class="w-[100px] text-[#5f7251]">Name</p>
                            <p class="w-[20px] text-[#5f7251]">:</p>
                            <input type="text" name="name" id=""
                                class="w-[500px] bg-slate-50 rounded-sm ring-1 ring-[#5f7251] focus:outline-none">
                        </div>
                        <div class="flex flex-row">
                            <p class="w-[100px] text-[#5f7251]">Price</p>
                            <p class="w-[20px] text-[#5f7251]">:</p>
                            <input type="text" name="price" id=""
                                class="w-[500px] bg-slate-50 rounded-sm ring-1 ring-[#5f7251] focus:outline-none">
                        </div>
                        <div class="flex flex-row">
                            <p class="w-[100px] text-[#5f7251]">Color</p>
                            <p class="w-[20px] text-[#5f7251]">:</p>
                            <input type="text" name="color" id=""
                                class="w-[500px] bg-slate-50 rounded-sm ring-1 ring-[#5f7251] focus:outline-none">
                        </div>
                        <div class="flex flex-row">
                            <p class="w-[100px] text-[#5f7251]">Brand</p>
                            <p class="w-[20px] text-[#5f7251]">:</p>
                            <input type="text" name="brand" id=""
                                class="w-[500px] bg-slate-50 rounded-sm ring-1 ring-[#5f7251] focus:outline-none">
                        </div>
                        <div class="flex flex-row">
                            <p class="w-[100px] text-[#5f7251]">Size</p>
                            <p class="w-[20px] text-[#5f7251]">:</p>
                            <input type="text" name="size" id=""
                                class="w-[500px] bg-slate-50 rounded-sm ring-1 ring-[#5f7251] focus:outline-none">
                        </div>
                        <div class="flex flex-row">
                            <p class="w-[100px] text-[#5f7251]">Amount</p>
                            <p class="w-[20px] text-[#5f7251]">:</p>
                            <input type="text" name="amount" id=""
                                class="w-[500px] bg-slate-50 rounded-sm ring-1 ring-[#5f7251] focus:outline-none">
                        </div>
                        <div class="flex flex-row">
                            <p class="w-[100px] text-[#5f7251]">Photo</p>
                            <p class="w-[20px] text-[#5f7251]">:</p>
                            <input type="file" name="image" id="" class="text-[#5f7251]">
                        </div>
                        <div class="flex flex-row">
                            <p class="w-[100px] text-[#5f7251]">Description</p>
                            <p class="w-[20px] text-[#5f7251]">:</p>
                            <textarea name="description" id=""
                                class="w-[500px] bg-slate-50 rounded-sm ring-1 ring-[#5f7251] focus:outline-none"></textarea>
                        </div>
                    </div>
                    <button type="submit"
                        class="w-[200px] h-auto py-4 mt-16 text-black hover:text-white font-semibold bg-[#5f7251] rounded-md flex justify-center items-center hover:bg-[#546548]">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @include('components.script')
@endsection
