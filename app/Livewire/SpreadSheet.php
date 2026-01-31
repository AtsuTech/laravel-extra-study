<?php

namespace App\Livewire;

use Livewire\Component;

class SpreadSheet extends Component
{


    public $row = 10;
    public $column = 30;

    //public $cell = [];
    public $cells = [
       [1=>['A',false],4=>['B',false],13=>['C',false]],
    ];

    public function addCell()
    {
        $this->cells[3][14] = 'D';
    }


    public function render()
    {
        return view('livewire.spreadsheet.index');
    }
}
