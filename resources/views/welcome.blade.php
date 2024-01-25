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
      @for($i=0;$i<4;$i++)
        <div class="flex items-center bg-secondary-lighter rounded-full h-20 w-20 text-center align-middle">
          <span class="w-full text-sm">{{ fake()->word() }}</span>
        </div>
        @endfor
    </div>
</section>
<section class="text-gray-600 body-font py-8">
    <div class="container mx-auto flex py-4 flex-row justify-between">
        <h2 class="text-xl text-primary-default p-2 font-bold">Acara Akan Datang</h2>
        <a href="#" class="text-sm bg-secondary-lighter text-primary-default p-2 mx-2 border border-secondary-default rounded">
          Lihat semua
        </a>
    </div>
    <div class="container mx-auto flex flex-row justify-around items-center">
        <img class="object-cover object-center rounded border border-secondary-default" alt="hero"
            src="{{ asset('assets/event.jpg') }}">
        <img class="object-cover object-center rounded border border-secondary-default" alt="hero"
            src="{{ asset('assets/event.jpg') }}">
        <img class="object-cover object-center rounded border border-secondary-default" alt="hero"
            src="{{ asset('assets/event.jpg') }}">
    </div>
</section>
<section class="text-gray-600 body-font py-8">
    <div class="container mx-auto flex py-4 flex-row justify-between">
        <h2 class="text-xl text-primary-default px-2 font-bold">Tentang Qur'an Journal</h2>
        <a href="#" class="text-sm bg-secondary-lighter text-primary-default p-2 mx-2 border border-secondary-default rounded">
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
        <img class="object-cover object-center rounded border border-secondary-default" alt="hero"
            src="{{ asset('assets/buku.jpg') }}">
        <img class="object-cover object-center rounded border border-secondary-default" alt="hero"
            src="{{ asset('assets/buku.jpg') }}">
        <img class="object-cover object-center rounded border border-secondary-default" alt="hero"
            src="{{ asset('assets/buku.jpg') }}">
    </div>
</section>
@endsection
