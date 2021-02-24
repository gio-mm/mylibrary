<?php

namespace App\Http\Livewire;

use App\Models\Book;


use Livewire\Component;


class Newest extends Component
{
    public $popular=[];
    public $favoriteBookIdList;

    public function mount(){
   

        $this->popular=Book::orderByDesc('created_at')->limit(4)->get()->toArray();
   
    }
  

    public function render()
    {
        return view('livewire.newest');
    }
}
