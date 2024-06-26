<?php

namespace App\Livewire\Web;

use Livewire\Component;
use App\Models\Film;

class CreateFilm extends Component
{
    public $title, $summary, $cover;

    protected $rules = [
        'title' => 'required|string|max:255',
        'summary' => 'required|string',
        'cover' => 'required|string|max:255',
    ];

    public function submit()
    {
        $this->validate();

        $film = Film::create([
            'title' => $this->title,
            'summary' => $this->summary,
            'cover' => $this->cover,
        ]);

        session()->flash('message', 'Filme cadastrado com sucesso!');

        return redirect()->route('films.show', ['id' => $film->id]);
    }

    public function render()
    {
        return view('livewire.web.create-film');
    }
}
