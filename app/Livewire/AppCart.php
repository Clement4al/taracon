<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class AppCart extends Component
{
//    public $count;
//    public string $notes;

    public $todos = [];

    public $todo = '';

    public function add()
    {
        $this->todos[] = $this->todo;

        $this->todo = '';
    }
//    public function increment()
//    {
//        $this->count++;
//    }
//
//    public function decrement()
//    {
//        $this->count--;
//    }

    public function render()
    {
        return view('livewire.app-cart');
    }
}
