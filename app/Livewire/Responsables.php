<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Responsable;


class Responsables extends Component
{
    public $search = '';

    public function render()
    {
        $responsables = Responsable::query()
            ->where('nombre', 'like', '%'.$this->search.'%')
            ->orWhere('apellido', 'like', '%'.$this->search.'%')
            ->orWhere('cargo', 'like', '%'.$this->search.'%')
            ->paginate(10);
        return view('livewire.responsables', compact('responsables'));
    }
}

