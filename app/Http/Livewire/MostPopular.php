<?php

namespace App\Http\Livewire;

use App\Models\Book;
use App\Models\FavoriteBook;

use Illuminate\Support\Facades\DB;

use Livewire\Component;

class MostPopular extends Component
{
    public $popular=[];

    public function mount(){

        $getTopBook=FavoriteBook::select('book_id')//,DB::raw('count(*) as total')
        ->groupBy('book_id')
        ->orderByDesc(DB::raw('count(book_id)'))
        ->limit(4)
        ->get() 
        ->toArray() ;

        $this->popular=Book::whereIn('id', $getTopBook)->get();

    }

    public function render()
    {
        return view('livewire.most-popular');
    }
}
