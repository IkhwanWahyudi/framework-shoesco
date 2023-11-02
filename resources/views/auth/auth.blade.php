@extends('layouts.landing')

@section('content')
    <div class="w-screen h-screen relative">
        <div class="w-screen h-screen absolute flex flex-col justify-around items-center bg-[#000000ac]">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logo-white.png') }}" alt="" class="w-[100px]">
            </a>
            <div class="h-[400px] w-[500px] flex flex-col justify-around text-center rounded-lg z-40 bg-[#ffffff68]">
                <form action="{{ route('login.action') }}" method="post" class="w-full flex flex-col items-center">
                    @csrf
                    @if(session('error'))
                        <div class="w-[350px] relative mb-6">
                            <div class="p-2 rounded-sm bg-red-100 ring-1 ring-red-500">
                                <p class="text-red-500">
                                    {{ session('error') }}
                                </p>
                            </div>
                        </div>
                    @endif
                    <div class="w-[350px] relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg class="h-6 fill-[#5f7251]" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                <path
                                    d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm80 0h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                            </svg>
                        </div>
                        <input type="username" name="username" placeholder="Username"
                            class="w-full ps-12 pe-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-[#5f7251] text-[#5f7251]">
                    </div>
                    <div class="w-[350px] relative mt-6">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg class="h-6 fill-[#5f7251]" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                <path
                                    d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm0-80h480v-400H240v400Zm240-120q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80ZM240-160v-400 400Z" />
                            </svg>
                        </div>
                        <input type="password" name="password" placeholder="Password"
                            class="w-full ps-12 pe-4 py-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-[#5f7251] text-[#5f7251]">
                    </div>
                    <button type="submit" class="w-[200px] h-auto py-4 mt-16 text-white font-medium bg-[#5f7251] rounded-md flex justify-center items-center hover:bg-[#49573e]">Sign In</button>
                </form>
                <div>
                    <a href="{{ route('regis') }}" class="text-blue-500 hover:text-blue-900">Don't have an account?</a>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/background.png') }}" alt="" class="w-screen h-screen object-cover -z-10">
    </div>
@endsection
