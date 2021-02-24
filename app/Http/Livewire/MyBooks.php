<?php

namespace App\Http\Livewire;
Use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class MyBooks extends Component
{
    public $myBooks;    

    public function mount(){

     $this->myBooks= User::find( Auth::user()->id)->book()->get();
    }

    public function render()
    {
        return view('livewire.my-books');
    }
}
