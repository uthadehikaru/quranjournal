<div>
    <form class="p-2" wire:submit="create">
        <h1 class="font-bold text-xl text-center">Masuk</h1>
        @error('auth')
            <span class="text-red-500 text-center p-2 text-sm">{{ $message }}</span>
        @enderror
        @if(session()->has('message'))
            <span class="text-green-500 text-center p-2 text-sm">{{ session()->get('message') }}</span>
        @endif
        {{ $this->form }}
        
        <button class="mt-2 bg-blue-500 text-white text-sm p-2 rounded" type="submit" wire:loading.attr="disabled"
        wire:loading.class="opacity-75">
            Login
        </button>
        <a href="{{ route('register') }}" class="text-blue-500 text-xs underline">belum punya akun? daftar disini</a>
    </form>
</div>
