@extends('layouts.web')
@section('content')
    <div class="p-4 grid grid-cols-1 gap-2 justify-center">
        @error('message')
            <x-alert>{{ $message }}</x-alert>
        @enderror
        <x-alert>Selamat Datang, {{ auth()->user()->name }}</x-alert>
        <div><a href="{{ route('logout') }}" class="p-2 bg-red-500 text-white border rounded text-sm">keluar</a></div>
    </div>
@endsection