<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Vehicles extends Component
{
	public $vehicle_type, $vehicle_brand, $vehicle_color, $plate_number, $chasis_number;
	public $owner_name, $owner_phone, $owner_address, $driver_name, $driver_phone, $driver_address, 
	       $driver_license_id;


	public function submitVehicle()
    {
        $this->validate(['vehicle_type' => 'required']);
        $this->validate(['vehicle_color' => 'required']);
        $this->validate(['vehicle_brand' => 'required']);
        $this->validate(['plate_number' => 'required|min:3']);
        $this->validate(['chasis_number' => 'required|min:2']);
        $this->validate(['owner_name' => 'required']);
        $this->validate(['owner_phone' => 'required']);
        $this->validate(['owner_address' => 'required']);
        $this->validate(['driver_name' => 'required']);
        $this->validate(['driver_phone' => 'required']);
        $this->validate(['driver_address' => 'required']);
        $this->validate(['driver_license_id' => 'required']);

        $submittedItems = \App\Models\Vehicles::create([
            'vehicle_type' => $this->vehicle_type,
            'vehicle_color' => $this->vehicle_color,
            'vehicle_brand' => $this->vehicle_brand,
            'plate_number' => $this->plate_number,
            'chasis_number' => $this->chasis_number,
            'owner_name' => $this->owner_name,
            'owner_phone' => $this->owner_phone,
            'owner_address' => $this->owner_address,
            'driver_name' => $this->driver_name,
            'driver_phone' => $this->driver_phone,
            'driver_address' => $this->driver_address,
            'driver_license_id' => $this->driver_license_id,

        ]);
        session()->flash('message', 'Item added successfully 👍');

        redirect(route('vehicles'));
    }


    public function render()
    {
        return view('livewire.vehicles');
    }
}


