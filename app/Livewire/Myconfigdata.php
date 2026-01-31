<?php

namespace App\Livewire;

use Livewire\Component;

class Myconfigdata extends Component
{
    public $msg;
    private $data;

    public function mount()
    {
        $this->msg = config('my_original_config_data.msg');
        $data = config('my_original_config_data.data');
    }

    public function render()
    {
        return view('livewire.myconfigdata');
    }
}
