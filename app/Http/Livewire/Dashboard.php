<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;


class Dashboard extends Component
{	

	public $manifest, $vehicles, $date;
	
    public function render()
    {

   		$date = Carbon::now()->toDateString();

    	$this->manifest = \App\Models\Manifest::whereDate('created_at', $date)->get();

        //dd($this->manifest);
        return view('livewire.dashboard');
    }
}
