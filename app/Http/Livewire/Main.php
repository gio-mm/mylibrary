<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class Main extends Component
{   

    public $favoriteBookIdList=[];
    public $num=1;

    public function mount(){
       
      
    }    
    public function render()
    {
        return view('livewire.main');
    }
}
