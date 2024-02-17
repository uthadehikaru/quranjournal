@extends('layouts.web')
@section('content')
<x-breadcrumbs :breadcrumbs="[
    '/' => 'Home',
]" />
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex py-4 flex-row justify-center">
        <h2 class="text-xl text-primary-default p-2 font-bold">Produk Terbaru</h2>
    </div>
    <div class="container mx-auto grid grid-cols-3 gap-4 px-2 justify-around items-center">
        @foreach ($posts as $post)
        <a href="{{ route('posts.show', $post->slug) }}"><img class="object-cover object-center rounded border border-secondary-default" alt="hero"
            src="{{ $post->thumbnail_url }}"></a>
        @endforeach
    </div>
</section>
@endsection
