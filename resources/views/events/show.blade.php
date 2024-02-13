@extends('layouts.web')
@section('content')
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex py-4 flex-row justify-center">
        <h2 class="text-xl text-primary-default p-2 font-bold text-center">{{ fake()->sentence() }}</h2>
    </div>
    <div class="container mx-auto flex flex-col p-4 gap-2 justify-center">
        <img class="w-fullobject-cover object-center rounded" alt="hero"
            src="{{ asset('assets/event.jpg') }}">
        <p>{{ fake()->text() }}</p>
        <p>{{ fake()->text() }}</p>
        <p>{{ fake()->text() }}</p>
    </div>
</section>
@endsection
