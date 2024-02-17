<div>
    <div class="p-2">
        <h3 class="font-bold text-xl">Komentar</h3>
        <div class="flex flex-col my-2">
            @forelse($comments as $comment)
            <div class="flex flex-col p-2">
                <h4 class="text-sm font-bold">{{ $comment->user->name }}</h4>
                <p class="text-sm">{{ $comment->message }}</p>
                <p class="italic text-xs">{{ $comment->created_at->format('d M Y h:i') }}</p>
            </div>
            @empty
            <p class="p-2 text-sm">Belum ada komentar</p>
            @endforelse
            <hr />
            @auth
            <div class="my-2">
                <p class="font-bold">Tambah Komentar</p>
                <form wire:submit="create">
                    {{ $this->form }}
                    
                    <button class="mt-2 bg-blue-500 text-white text-sm p-2 rounded" type="submit" wire:loading.attr="disabled"
                    wire:loading.class="opacity-75">
                        Submit
                    </button>
                </form>
            </div>
            
            <x-filament-actions::modals />  
            @else
            <p class="text-center my-2 text-sm">Silahkan <a href="#" class="text-blue-500">masuk/daftar</a> untuk mengirim komentar</p>
            @endauth
        </div>
    </div>
</div>
