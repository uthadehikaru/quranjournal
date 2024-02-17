@extends('layouts.web')
@section('content')
<x-breadcrumbs :breadcrumbs="[
    '/' => 'Beranda',
]" />
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex py-4 flex-row justify-center">
        <h2 class="text-xl text-primary-default p-2 font-bold">Produk Terbaru</h2>
    </div>
    <div class="container mx-auto grid grid-cols-3 gap-4 px-2 justify-around items-center">
        @foreach ($posts as $post)
        <x-post-card :post="$post" />
        @endforeach
    </div>
    <div class="p-2">
    {{ $posts->links() }}
    </div>
</section>
@endsection
