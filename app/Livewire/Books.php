<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;


class Books extends Component
{
    public $books = [];
    public function mount()
    {
        $this->books = Book::all();
    }


    public function render()
    {
        return view('livewire.books.index');
    }
}
