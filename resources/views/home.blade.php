@extends('layouts.web')
@section('content')
@if($banners)
<section class="text-gray-600 body-font">
<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        @if(count($banners)==1)
        @php $banner = $banners[0] @endphp
        <div class="">
            <img src="{{ asset('storage/banner/'.$banner->value) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="{{ $banner->key }}">
        </div>
        @else
        @foreach ($banners as $banner)
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('storage/banner/'.$banner->value) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="{{ $banner->key }}">
        </div>
        @endforeach
        @endif
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        @for ($i=0;$i<$banners->count();$i++)
        <button type="button" class="w-1 h-1 rounded-full" aria-current="true" aria-label="Slide {{ $i }}" data-carousel-slide-to="{{ $i }}"></button>
        @endfor
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-4 h-4 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-2 h-2 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-4 h-4 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-2 h-2 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

</section>
@endif
<!-- end hero -->
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex py-8 flex-row justify-around items-center">
        @foreach ($pages as $page)
            <a href="{{ route('pages.show', $page->slug) }}" class="flex items-center bg-secondary-lighter 
            rounded-full h-20 w-20 text-center align-middle hover:opacity-75">
            <span class="w-full text-sm">{{ $page->title }}</span>
            </a>
        @endforeach
    </div>
</section>
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex py-8 flex-row justify-around items-center">
        @foreach ($categories as $category)
            <a href="{{ route($category->slug.'.index') }}" class="flex items-center bg-secondary-lighter 
            rounded-full h-20 w-20 text-center align-middle hover:opacity-75">
            <span class="w-full text-sm">{{ $category->title }}</span>
            </a>
        @endforeach
    </div>
</section>
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex py-4 flex-row justify-between">
        <h2 class="text-xl text-primary-default p-2 font-bold">Acara Akan Datang</h2>
        <a href="{{ route('acara.index') }}" class="text-sm bg-secondary-lighter text-primary-default p-2 mx-2 border border-secondary-default rounded">
          Lihat semua
        </a>
    </div>
    <div class="container mx-auto grid grid-cols-3 gap-4 px-2 justify-around items-center">
        @foreach ($events as $event)
        <x-post-card :post="$event" route="events" />
        @endforeach
    </div>
</section>
@endsection
