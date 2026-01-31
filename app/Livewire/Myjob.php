<?php

namespace App\Livewire;

use Livewire\Component;
use App\Jobs\Myjob as ActJob;

class Myjob extends Component
{
    public function mount()
    {
        ActJob::dispatch()->delay(now()->addMinutes(2));
    }

    public function render()
    {
        return view('livewire.myjob');
    }
}
