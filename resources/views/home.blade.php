@extends('layouts.web')
@section('content')
<!-- start hero -->
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex p-2 md:flex-row flex-col items-center">
        <img class="object-cover object-center rounded w-full" alt="hero"
            src="{{ asset('assets/banner.jpg') }}">
    </div>
</section>
<!-- end hero -->
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex py-8 flex-row justify-around items-center">
        @foreach ($categories as $category)
            <div class="flex items-center bg-secondary-lighter rounded-full h-20 w-20 text-center align-middle">
            <span class="w-full text-sm">{{ $category->title }}</span>
            </div>
        @endforeach
    </div>
</section>
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex py-4 flex-row justify-between">
        <h2 class="text-xl text-primary-default p-2 font-bold">Acara Akan Datang</h2>
        <a href="{{ route('events.index') }}" class="text-sm bg-secondary-lighter text-primary-default p-2 mx-2 border border-secondary-default rounded">
          Lihat semua
        </a>
    </div>
    <div class="container mx-auto grid grid-cols-3 gap-4 px-2 justify-around items-center">
        @foreach ($events as $event)
        <a href="{{ route('events.show', $event->slug) }}"><img class="object-cover object-center rounded border border-secondary-default" alt="{{ $event->title }}"
            src="{{ asset('assets/event.jpg') }}"></a>
        @endforeach
    </div>
</section>
<section class="text-gray-600 body-font py-8">
    <div class="container mx-auto flex py-4 flex-row justify-between">
        <h2 class="text-xl text-primary-default px-2 font-bold">Tentang Qur'an Journal</h2>
        <a href="https://instagram.com/thequranjournal.id" class="text-sm bg-secondary-lighter text-primary-default p-2 mx-2 border border-secondary-default rounded">
          Follow Us
        </a>
    </div>
    <div class="container mx-auto flex flex-row justify-around items-center">
    <iframe width="100%" height="230px" class="p-2 border rounded"
    src="https://www.youtube.com/embed/PdsJhBJIEfg?si=Uc6VmVSkDqUMlfnw" 
    title="YouTube video player" frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; 
    web-share" allowfullscreen></iframe>
    </div>
</section>
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex py-2 flex-row justify-between">
        <h2 class="text-xl text-primary-default p-2 font-bold">Buku dan Printable</h2>
        <a href="#" class="text-sm bg-secondary-lighter text-primary-default p-2 mx-2 border border-secondary-default rounded">
          Lihat semua
        </a>
    </div>
    <div class="container mx-auto flex py-2 flex-row justify-around items-center">
        @foreach ($products as $product)
        <img class="object-cover object-center rounded border border-secondary-default" alt="{{ $product->title }}"
            src="{{ asset('assets/buku.jpg') }}">
        @endforeach
    </div>
</section>
@endsection
