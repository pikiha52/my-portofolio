<?php

namespace App\Http\Livewire;

use App\Models\Portofolio;
use Livewire\Component;

class SearchPortofolio extends Component
{

    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.search-portofolio', [
            'portofolio' => Portofolio::with('details')->where('name', 'like', '%'.$this->search.'%')->get(),
        ]);
    }
}
