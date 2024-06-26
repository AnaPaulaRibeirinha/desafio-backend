<?php

namespace App\Livewire\Web;

use Livewire\Component;
use App\Models\Film;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.web.home', [
            'films' => Film::paginate(10),
        ]);
    }
}

