<?php

namespace App\Http\Livewire;


use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;


class DownloadPdf extends Component
{
    public $link;

    public function mount(){
        // dd( storage_path());
        // dd(Storage::download(Storage::url('FightClub.pdf')));
    }

    public function test(){
        return Storage::download($this->link);

    }
    public function render()
    {
        return view('livewire.download-pdf');
    }
}
