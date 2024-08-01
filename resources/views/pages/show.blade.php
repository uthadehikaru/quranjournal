@extends('layouts.web')
@section('content')
<x-breadcrumbs :breadcrumbs="[
    '/' => 'Beranda',
    '/page/'.$page->slug => $page->title,
]" />
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex py-4 flex-row justify-center">
        <h2 class="text-xl text-primary-default p-2 font-bold text-center">{{ $page->title }}</h2>
    </div>
    <div class="container mx-auto flex flex-col p-4 gap-2 justify-center">
        {!! $page->content !!}
    </div>
</section>
@endsection
