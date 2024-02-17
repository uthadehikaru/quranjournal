<div>
    <form class="p-2" wire:submit="create">
        <h1 class="font-bold text-xl text-center">Daftar</h1>
        @error('error')
            <span class="text-red-500 p-2 text-sm">{{ $message }}</span>
        @enderror
        {{ $this->form }}
        
        <button class="mt-2 bg-blue-500 text-white text-sm p-2 rounded" type="submit" wire:loading.attr="disabled"
        wire:loading.class="opacity-75">
            Register
        </button>
        <a href="{{ route('login') }}" class="text-yellow-500 text-xs underline">kembali ke login</a>
    </form>
</div>
