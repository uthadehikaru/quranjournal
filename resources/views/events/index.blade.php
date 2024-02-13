@extends('layouts.web')
@section('content')
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex py-4 flex-row justify-center">
        <h2 class="text-xl text-primary-default p-2 font-bold">Acara Akan Datang</h2>
    </div>
    <div class="container mx-auto grid grid-cols-3 gap-4 px-2 justify-around items-center">
        @for($i=0;$i<9;$i++)
        <a href="{{ route('events.show', 'test') }}"><img class="object-cover object-center rounded border border-secondary-default" alt="hero"
            src="{{ asset('assets/event.jpg') }}"></a>
        @endfor
    </div>
</section>
@endsection
