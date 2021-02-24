<?php

namespace App\Http\Livewire\Card;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Arr;
class Favorite extends Component
{   
    public $checked=false;
    public  $cardId;
    public $user;
    public $book;
    
    public function mount(){
        if(Auth::check()){
            $this->user=Auth::user();
            $favoriteBooksList=$this->user->book()->get()->toArray();
            $favoriteBookIdList=Arr::pluck($favoriteBooksList,'id');
            if(in_array($this->cardId, $favoriteBookIdList)){
                $this->checked=true;

            };
        }
        
    }
    public function color(){
            if(Auth::check()){
                if(!$this->checked){
                    DB::table('favorite_books')->insert([
                        'user_id' =>Auth::id(),
                        'book_id' => $this->cardId
                    ]);
                }else{
                    DB::table('favorite_books')
                    ->where('user_id',$this->user->id)
                    ->where('book_id',$this->cardId)
                    ->delete();
                }
            
                $this->checked=!$this->checked;
        }
    }

    public function render()
    {
        return view('livewire.card.favorite');
    }
}
