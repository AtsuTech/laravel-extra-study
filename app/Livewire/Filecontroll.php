<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;


class Filecontroll extends Component
{
    public $file_name;
    public $data;
    public $input; //フォーム入力値

    public function mount()
    {
        $this->file_name = "sample.txt";
        $this->data = explode(PHP_EOL, Storage::disk('public')->get($this->file_name));
    }

    //txtファイルに書き込み
    public function write_file()
    {
        //フォーム入力値をテキストファイルに追加
        $add = Storage::disk('public')->get($this->file_name) . PHP_EOL . $this->input;
        Storage::disk('public')->put($this->file_name, $add);
        $this->input = "";
        return $this->data = explode(PHP_EOL, Storage::disk('public')->get($this->file_name));
    }


    public function render()
    {
        return view('livewire.filecontroll');
    }
}
