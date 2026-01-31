<div>
    <h1 class="text-2xl font-bold">SpreadSheet</h1>
    <flux:button variant="primary" type="submit" class="w-full" wire:click="addCell">
        Add Cell
    </flux:button>
    <table border="1" class="border-gray-300">
        <tr>
            @for ($i = 0; $i < $row; $i++)
            <tr>
                @for ($j = 0; $j < $column; $j++)
                <td class="border border-gray-300 p-3 relative">
                    <input type="text" class="w-fit block absolute top-0 left-0" value={{ $cells[$i][$j][0] ?? '' }}>
                    
                </td>
                @endfor
            </tr>
            @endfor
        </tr>
    </table>
</div>