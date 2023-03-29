@extends('layout')

@section('page')

    <div class="text-center">
        <h2 class="text-center mb-16 mt-20 font-bold text-4xl mb-1">All Events</h2>

        <div class="w-1/4 mx-auto">
            @foreach ($events as $event)

                <div class="mt-10 mb-20">
                    <h1 class="mb-4 text-2xl font-bold">{{ $event->title }} </h1>
                    <article class="mb-4 italic">Description: {{ $event->description }}</article>
                    <p class="mb-4 text-center font-bold">
                        When: {{ $event->date }}
                    </p>
                    <div>
                        <a href="/event/{{$event->id}}" class="cursor-pointer self-center bg-gray-500 p-2 rounded-md text-white">Details
                        </a>
                    </div>
                </div>

            @endforeach
        </div>
    </div>

@endsection




