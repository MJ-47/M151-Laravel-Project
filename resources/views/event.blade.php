@extends('layout')

@section('page')
    <div>
        <h1 class="text-center mb-16 mt-20 font-bold text-5xl">{{ $event->title }}</h1>

        <p class="text-center pb-4">
            Description: {{ $event->description }}
        </p>

        <p class="text-center font-bold">
            When: {{ $event->date }}
        </p>
    </div>

    <h2 class="text-center my-10 font-bold text-2xl">Sign Up for Event</h2>

    <div class="flex items-center w-full">
        <div class="text-center self-center text-black items-center w-1/3 h-400 bg-gray-300 rounded-lg p-5 mx-auto">
            <form method="post" action='?'>
                <div class="center">
                    @csrf
                    <div class="flex space-between my-2">
                        <label class="self-start mr-auto">Email</label>
                        <input class="h-8 w-80 rounded-b-lgs" type="email" id="email" name="email" value="">
                    </div>

                    <div class="flex space-between my-2">
                        <label class="self-start mr-auto">First Name</label>
                        <input class="h-8 w-80 rounded-b-lgs" type="text" id="first_name" name="first_name" value="">
                    </div>

                    <div class="flex space-between my-2">
                        <label class="self-start mr-auto">Last Name</label>
                        <input class="h-8 w-80 rounded-b-lgs" type="text" id="last_name" name="last_name" value="">
                    </div>

                    <div class="flex space-between my-2">
                        <input class="m-1" type="radio" id="answer" name="answer" value="yes">
                        <label class="mr-2"> Yes, I will be attending.</label>
                        <input class="m-1" type="radio" id="answer" name="answer" value="no">
                        <label class="mr-2"> No, I won't be attending.</label>
                    </div>


                    <div>
                        <button type="submit" class="cursor-pointer self-center bg-blue-400 p-2 rounded-md text-white">
                            Sign Up
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="text-center">
        <div class="self-center my-10">
            <a class="cursor-pointer self-center bg-blue-400 p-2 rounded-md m-7 text-white"
               href="/event/{{$event->id}}/applications">View Applications</a>
        </div>
    </div>

@endsection
