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
        <img class="w-fullobject-cover object-center rounded" alt="hero"
            src="{{ asset('assets/quranjournal-logo.png') }}">
        <p class="font-bold">Jurnal Al-Qur'an Indonesia</p>
        <p>- Personalise the message of the Quran</p>
        <p>- Pembiasaan Tadabur melalui Quran Journaling</p>
        <p>- Beli produk Jurnal Al-Quran, Planner Harian, dll : <a 
        class="text-blue-500 underline" href="msha.ke/jurnalquranindonesia" target="_blank">msha.ke/jurnalquranindonesia</a></p>
    </div>
</section>
@endsection
