<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;


class Tickets extends Component
{
	use WithFileUploads;
    
    public $vehicles = null;

    public $manifestNum, $manifestDate, $vehicle, $seats, $fare, $photo, $travelFrom, $travelTo, $name,
    		$sex, $address, $destination, $nextOfKin, $nextOfKinPhone;
/*
    public function submitManifest()
    {
        $this->validate(['manifestNum' => 'required']);
        $this->validate(['manifestDate' => 'required']);
        $this->validate(['vehicle' => 'required']);
        $this->validate(['seats' => 'required']);
        $this->validate(['fare' => 'required']);
        $this->validate(['photo' => 'required']);
        $this->validate(['travelFrom' => 'required']);
        $this->validate(['travelTo' => 'required']);
        $this->validate(['name' => 'required']);
        $this->validate(['sex' => 'required']);
        $this->validate(['address' => 'required']);
        $this->validate(['destination' => 'required']);
        $this->validate(['nextOfKin' => 'required']);
        $this->validate(['nextOfKinPhone' => 'required']);
	
        $submittedItems = \App\Models\Passengers::create([
            'manifestNum' => $this->manifestNum,
            'manifestDate' => $this->manifestDate,
            'vehicle' => $this->vehicle,
            'seats' => $this->seats,
            'fare' => $this->fare,
            'photo' => $this->photo,
            'travelFrom' => $this->travelFrom,
            'travelTo' => $this->travelTo,
         	 'name' => $this->name,
            'sex' => $this->sex,
            'address' => $this->address,
            'destination' => $this->destination,
            'nextOfKin' => $this->nextOfKin,
            'nextOfKinPhone' => $this->nextOfKinPhone,
			

        ]);
        session()->flash('message', 'Item added successfully 👍');

        redirect(route('vehicles'));

        
    }
		*/




    public function render()
    {
        $this->vehicles = \App\Models\Vehicles::where('is_active', '1')->get();

        return view('livewire.tickets');
    }
}
