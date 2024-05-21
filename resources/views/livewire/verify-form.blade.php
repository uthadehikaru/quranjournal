<div>
    <div class="p-4 grid grid-cols-1 gap-2 justify-center">
        @error('message')
        <x-alert>{{ $message }}</x-alert>
        @enderror
        <div class="text-center"><p>Verifikasi akun anda dengan mengklik tautan yang ada di email</p></div>
        <button wire:click="resend" class="text-blue-500 underline" wire:loading.attr="disabled">
            Tidak mendapatkan email?, klik disini untuk mengirim ulang
            <div wire:loading>
                <x-loading />
            </div>
        </button>
    </div>
</div>
