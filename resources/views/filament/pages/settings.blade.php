<x-filament-panels::page>
<form wire:submit="submit">
    {{ $this->form }}
    <x-filament::button wire:click="submit">
    Update
    </x-filament::button>
</form>
</x-filament-panels::page>
