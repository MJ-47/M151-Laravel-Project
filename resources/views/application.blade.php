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
<div class="text-center">
    <h2 class="text-center mb-16 mt-20 font-bold text-2xl mb-1">Applications</h2>

    @foreach ($applications as $application)
        <ul>
            <li>- {{ $application->first_name }} {{ $application->last_name }}</li>
        </ul>

    @endforeach

    <div class="mt-16">
        @if($declinedApplications == 1)
            {{ $declinedApplications }} Person will not be attending.
        @else
        {{ $declinedApplications }} Persons will not be attending.
        @endif
    </div>
</div>

@endsection
