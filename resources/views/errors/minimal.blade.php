@extends('layouts.web')
@section('content')
<div class="p-2 text-center">
    <div class="font-bold text-xl">@yield('code')</div>
    <div class="">@yield('message')</div>
    <a href="{{ route('home') }}" class="text-blue-500 text-xs mt-2">kembali ke beranda</a>
</div>
@endsection