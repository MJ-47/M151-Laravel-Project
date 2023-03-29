@extends('layout')

@section('page')

    <h2 class="text-center my-10 font-bold text-2xl">Login</h2>

    <div class="flex items-center w-full">
        <div class="text-center self-center text-black items-center w-1/3 h-400 bg-gray-300 rounded-lg p-5 mx-auto">
            <form method="post" action='?'>
                <div class="center">
                    @csrf
                    <div class="flex space-between my-2">
                        <label class="self-start mr-auto">Email</label>
                        <input class="h-8 w-80 rounded-b-lgs" type="email" id="email" name="email" value="">
                    </div>
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                    <div class="flex space-between my-2">
                        <label class="self-start mr-auto">Password</label>
                        <input class="h-8 w-80 rounded-b-lgs" type="password" id="password" name="password" value="">
                    </div>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                    <div>
                        <button type="submit" class="cursor-pointer self-center bg-blue-400 p-2 rounded-md text-white">
                            Login
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
