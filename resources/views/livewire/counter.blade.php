<div>
    {{-- Stop trying to control. --}}
    <h1 class="text-2xl font-bold">Counter</h1>
    <h1>{{ $count }}</h1>

    @if ($count % 2 == 0) 
    <h1>偶数</h1>
    @endif

    <div class="flex gap-2 w-3.5">
        <flux:button variant="primary" type="submit" class="w-full" wire:click="increment">
            +
        </flux:button>
        <flux:button variant="primary" type="submit" class="w-full" wire:click="decrement">
            -
        </flux:button>
    </div>


</div>
