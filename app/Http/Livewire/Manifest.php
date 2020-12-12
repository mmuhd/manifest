<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;


class Manifest extends Component
{
	use WithFileUploads;
	
	public $manifest, $vehicles, $date;
	public $manifestNum, $manifestDate, $vehicle, $seats, $fare, $photo, $travelFrom, $travelTo, $name,
    		$sex, $address, $destination, $nextOfKin, $nextOfKinPhone;

    public function render()
    {
        $this->vehicles = \App\Models\Vehicles::where('is_active', '1')->get();
        
        return view('livewire.manifest');
    }
}
