<?php

namespace App\Http\Livewire;

use App\Models\GroupParameter;
use Livewire\Component;

class Acreditacion extends Component
{
    public function render()
    {
        $mision = GroupParameter::where('name', 'Mision')->first();
        $vision = GroupParameter::where('name', 'Vision')->first();

        return view('livewire.acreditacion', compact('mision', 'vision'));
    }
}
