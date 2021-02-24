<?php

namespace App\Http\Livewire;

use App\Models\Book;

use Livewire\Component;

class SearchBar extends Component
{
    public $query;
    public $books;

    public function mount(){
       
        $this->reset();
    }
    public function reset(...$properties)
    {
        $this->query='';
        $this->books=[];
    }
    public function updatedQuery(){
       
        $this->books=Book::where('name','like','%'.$this->query.'%')->orWhere('author','like','%'.$this->query.'%')->limit(8)
        ->get()
        ->toArray();
        // dd($this->books);
    }
    public function render()
    {
        return view('livewire.search-bar');
    }
}
