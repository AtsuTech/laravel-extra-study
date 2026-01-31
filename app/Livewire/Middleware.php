<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class Middleware extends Component
{
    public $data;

    //ミドルウェアから値(request)を取得して、$this->dataに格納する
    public function mount(Request $request)
    {
        
        $this->data = [
            'id' => isset($request->id) ? $request->id : 'ミドルウェアで設定したIDがありません',
            'msg' => isset($request->msg) ? $request->msg : 'ミドルウェアで設定したメッセージがありません'
        ];
    }


    public function render()
    {
        //return view('livewire.middleware', ['data' => $this->data]);
        return view('livewire.middleware');
    }
}
