<?php

namespace App\Http\Controllers;

use App\Models\Passengers;
use App\Models\Manifest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Image;


class PassengersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $passengers = [];
        $user_id = Auth::id();

            if ($request->hasFile('photo')) {

        $filename = time() . '.' . $request->get("photo")->getClientOriginalExtension();
          Image::make($request->get("photo"))->resize(300, 300)->save( storage_path('\app\uploads/' . $filename ) );
        }

        $random1 = Str::random(30);
        $man = new Manifest;

            $man->manifestId = $request->get("manifestNumber");
            $man->tripId = $random1;
            $man->vehicle = $request->get("vehicle");
            $man->seats = $request->get("seats");
            $man->fare = $request->get("fare");
            $man->photo = $request->get("photo");
            $man->travelFrom = $request->get("travelFrom");
            $man->travelTo = $request->get("travelTo");
            $man->addedBy = $user_id;

            $man->save();

           

        foreach ($request->input("name") as $key => $value) {
            $random2 = Str::random(30);

            $psg = new Passengers;

            $psg->manifestId = $request->get("manifestNumber");
            $psg->tripId = $random1;
            $psg->name = $request->get("name")[$key];
            $psg->sex = $request->get("sex")[$key];
            $psg->address = $request->get("address")[$key];
            $psg->destination = $request->get("destination")[$key];
            $psg->nextOfKin = $request->get("nextOfKin")[$key];
            $psg->nextOfKinPhone = $request->get("nextOfKinPhone")[$key];
            $psg->addedBy = Auth::id();
            $psg->passengerId = $random2;

            $psg->save();
        }

        $manifestId = $request->get("manifestNumber");
        $vehicle = $request->get("vehicle");

        session(['manifestId'=>$manifestId]);
        session(['vehicle'=>$vehicle]);

        return redirect('/manifest-show');
        session()->flash('message', 'Item added successfully 👍');
 
    }

    public function stores(Request $request)
    {

        $data = json_decode($request->get('data'), true);
        print_r($data);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Passengers  $passengers
     * @return \Illuminate\Http\Response
     */
    public function show(Passengers $passengers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Passengers  $passengers
     * @return \Illuminate\Http\Response
     */
    public function edit(Passengers $passengers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Passengers  $passengers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Passengers $passengers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Passengers  $passengers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Passengers $passengers)
    {
        //
    }
}
