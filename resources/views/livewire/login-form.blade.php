<div>
    <form class="p-2" wire:click="create">
        <h1 class="font-bold text-xl text-center">Masuk</h1>
        @error('auth')
            <span class="text-red-500 p-2 text-sm">{{ $message }}</span>
        @enderror
        {{ $this->form }}
        
        <button class="mt-2 bg-blue-500 text-white text-sm p-2 rounded" type="submit" wire:loading.attr="disabled"
        wire:loading.class="opacity-75">
            Login
        </button>
    </form>
</div>
