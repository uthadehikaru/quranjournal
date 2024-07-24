@extends('layouts.web')
@section('content')
<x-breadcrumbs :breadcrumbs="[
    '/' => 'Beranda',
]" />
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex py-4 flex-row justify-center">
        <h2 class="text-xl text-primary-default p-2 font-bold text-center">Tentang Kami</h2>
    </div>
    <div class="container mx-auto flex flex-col p-4 gap-2 justify-center">
        {!! $about->value !!}
    </div>
</section>
@endsection
