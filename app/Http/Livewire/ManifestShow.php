<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ManifestShow extends Component
{
	public $man, $pas, $manifestId, $veh;

    public function render()
    {
    	$manifestId = session('manifestId');
    	$vehicle = session('vehicle');

        $this->pas = \App\Models\Passengers::where('manifestId', $manifestId)->get();
        $this->man = \App\Models\Manifest::where('manifestId', $manifestId)->get();
        $this->veh = \App\Models\Vehicles::where('id', $vehicle)->get();
    	
    	//dd($this->man);

        return view('livewire.manifest-show');
    }
}
