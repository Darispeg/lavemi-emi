<?php

namespace App\Http\Livewire;

use App\Models\GroupParameter;
use App\Models\Parameter;
use Livewire\Component;

class Autoridades extends Component
{
    public function render()
    {
        $group = GroupParameter::where('description', 'TABLA - AUTORIDADES')->first();


        $autoridades = Parameter::where('group_id', $group->id)->paginate();

        return view('livewire.autoridades', compact('autoridades'));
    }
}
