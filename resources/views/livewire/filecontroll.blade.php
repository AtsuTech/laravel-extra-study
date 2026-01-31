<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <h1 class="bg-slate-300 text-2xl p-2">ファイルの扱い</h1>
    
    @foreach($data as $d)
        <p>{{ $d }}</p>
    @endforeach

    <div class="flex space-x-2 w-[200px]">
        <input type="text" wire:model.live="input" placeholder="何か入力" variant="primary" class="block w-[170px] border border-amber-50 bg-gray-300 rounded-md p-2" />
        <flux:button variant="primary" type="submit" class="w-full" wire:click="write_file">
            +内容追加
        </flux:button>
    </div>

</div>
