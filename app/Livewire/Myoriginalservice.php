<?php
//自作したサービスから値の受けとっり
namespace App\Livewire;

use Livewire\Component;
use App\MyOriginalClasses\MyOriginalservice as ServiceClass;

class Myoriginalservice extends Component
{
    public $msg;
    public $data;

    public function mount(ServiceClass $myOriginalservice)
    {
        $this->msg =$myOriginalservice->say();
        $this->data = $myOriginalservice->data();
    }

    public function render()
    {
        return view('livewire.myoriginalservice');
    }
}
