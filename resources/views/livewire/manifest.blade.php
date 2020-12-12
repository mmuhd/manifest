
@extends('layouts.base')

@section('title', __('Create Manifest'))

 

<div 
    class="container mx-auto py-6 px-16 mr-4 bg-gray-50"
    x-data="manifests()"
    x-init="generateManifestNumber(111111, 999999);"
    x-cloak >

        <div class="flex justify-between">
            <h2 class="text-2xl font-bold mb-6 pb-2 tracking-wider uppercase">Manifest</h2>
            <div>
                
            </div>
        </div>
    <form method="post" action="/storePassengers" >
        @csrf
        <div class="flex mb-8 justify-between">
            <div class="w-2/4">
                <div class="mb-2 md:mb-1 md:flex items-center">
                    <label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Manifest No.</label>
                    <span class="mr-4 inline-block hidden md:block">:</span>
                    <div class="flex-1">
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-yellow-300" name="manifestNumber" id="manifestNumber" type="text" placeholder="eg. #MNI-100001" x-model="manifestNo" wire:model.debounce.500ms="manifestNumber" readonly>
                    </div>
                    @error('manifestNumber') <span class="error text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <div class="mb-2 md:mb-1 md:flex items-center">
                    <label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Manifest Date</label>
                    <span class="mr-4 inline-block hidden md:block">:</span>
                    <div class="flex-1">
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-yellow-300" type="date" value="<?php echo date('Y-m-d'); ?>" readonly>
                    </div>
                    @error('manifestDate') <span class="error text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <div class="mb-2 md:mb-1 md:flex items-center">
                    <label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Vehicle</label>
                    <span class="mr-4 inline-block hidden md:block">:</span>
                    <div class="flex-1">
                    <select class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-yellow-300" id="vehicle" name="vehicle"  type="text" wire:model.debounce.500ms="vehicle" required>
                        <option value=''>Choose a Vehicle</option>
                        @foreach($vehicles as $vehicle)
                        <option value={{ $vehicle->id }}>{{ $vehicle->plate_number }}</option>
                        @endforeach
                    </select>   
                    </div>
                    @error('vehicle') <span class="error text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                <div class="mb-2 md:mb-1 md:flex items-center">
                    <label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">No of Seats</label>
                    <span class="mr-4 inline-block hidden md:block">:</span>
                    <div class="flex-1">
                    <input id="seats" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-yellow-300" type="number" name="seats" wire:model.debounce.500ms="seats"  required>
                    </div>
                    @error('seats') <span class="error text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                <div class="mb-2 md:mb-1 md:flex items-center">
                    <label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Transport Fare</label>
                    <span class="mr-4 inline-block hidden md:block">:</span>
                    <div class="flex-1">
                    <input id="fare" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-yellow-300" type="number" name="fare" wire:model.debounce.500ms="fare"  placeholder="eg. 2000" required>
                    </div>
                    @error('fare') <span class="error text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

            </div>
            <div>
                <div class="w-32 h-32 mb-1 border rounded-lg overflow-hidden relative bg-gray-100">
                    <img id="image" class="object-cover w-full h-32" src="/images/placehold.svg" />
                    
                    <div class="absolute top-0 left-0 right-0 bottom-0 w-full block cursor-pointer flex items-center justify-center" onClick="document.getElementById('fileInput').click()">
                        <button type="button"
                            style="background-color: rgba(255, 255, 255, 0.65)"
                            class="hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 text-sm border border-gray-300 rounded-lg shadow-sm"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-camera" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                                <circle cx="12" cy="13" r="3" />
                            </svg>                            
                        </button>

                    </div>
                </div>
                <input name="photo" id="fileInput" accept="image/*" class="hidden" type="file" onChange="let file = this.files[0]; 
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        document.getElementById('image').src = e.target.result;
                    };
                
                    reader.readAsDataURL(file);
                ">
            </div>
        </div>

        <div class="flex flex-wrap justify-between mb-8">
            <div class="w-full md:w-1/3 mb-2 md:mb-0">
                <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Traveling From:</label>
                <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="travelFrom" name="travelFrom" type="text" placeholder="Vehicle Current Location"  required>
            </div>
            <div class="w-full md:w-1/3">
                <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Traveling To:</label>
                <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="travelTo" name="travelTo" type="text" placeholder="Destination"  required>
            </div>
        </div>

        <div class="flex -mx-1 border-b py-2 items-start">
            <div class="flex-1 px-2">
                <p class="text-gray-800  text-xs font-semibold">Passenger</p>
            </div>

            <div class="flex-1 px-2 text-right">
                <p class="text-gray-800  text-xs font-semibold">Sex</p>
            </div>

            <div class="flex-1 px-2 text-right">
                <p class="text-gray-800  text-xs font-semibold">Address</p>
            </div>

            <div class="flex-1 px-2 text-right">
                <p class="text-gray-800  text-xs font-semibold">Destination</p>
            </div>

            <div class="flex-1 px-2 text-right">
                <p class="text-gray-800  text-xs font-semibold">NextOfKin Name</p>
                    
            </div>

            <div class="flex-1 px-2 text-right">
                <p class="text-gray-800  text-xs font-semibold">NextOfKin Phone</p>
                </p>
            </div>

            <div class="flex-1 px-2 text-center">
            </div>
        </div>
        <template x-for="manifest in passengers" :key="manifest.id">
            <div class="flex -mx-1 py-2 border-b">
                <div class="flex-1 px-2">
                    <p class="text-gray-800 text-xs" x-text="manifest.name"></p>
                    <input x-text="manifest.name" x-model="manifest.name" name="name[]" style="display: none;">

                </div>

                <div class="flex-1 px-2 text-right">
                    <p class="text-gray-800 text-xs" x-text="manifest.sex"></p>
                    <input x-text="manifest.sex" x-model="manifest.sex" name="sex[]" style="display: none;" >

                </div>

                <div class="flex-1 px-2 text-right">
                    <p class="text-gray-800 text-xs" x-text="manifest.address"></p>
                    <input x-text="manifest.address" x-model="manifest.address" name="address[]" style="display: none;">

                </div>

                <div class="flex-1 px-2 text-right">
                    <p class="text-gray-800 text-xs" x-text="manifest.destination"></p>
                    <input x-text="manifest.destination" x-model="manifest.destination" name="destination[]" style="display: none;">

                </div>

                <div class="flex-1 px-2 text-right">
                    <p class="text-gray-800 text-xs" x-text="manifest.nextOfKin"></p>
                    <input x-text="manifest.nextOfKin" x-model="manifest.nextOfKin" name="nextOfKin[]" style="display: none;">

                </div>

                <div class="flex-1 px-2 text-right">
                    <p class="text-gray-800 text-xs" x-text="manifest.nextOfKinPhone"></p>
                    <input x-text="manifest.nextOfKinPhone" x-model="manifest.nextOfKinPhone" name="nextOfKinPhone[]" style="display: none;">
                </div>

                <div class="flex-1 px-2 text-right" style="display: none;">
                    <p class="text-gray-800 text-xs" x-text="manifest.manifestId" x-model="manifest.manifestId" style="display: none;"></p>
                </div>

                <div class="px-2 w-20 text-right">
                    <a href="#" class="text-red-500 hover:text-red-600 text-sm font-semibold" @click.prevent="deleteItem(manifest.id)">Delete</a>
                </div>
            </div>
        </template>

        <button type="button" class="mt-6 bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 text-sm border border-yellow-300 rounded shadow-sm" x-on:click="openModal = !openModal">
            Add Passengers
        </button>

        <div class="py-2 ml-auto mt-5 w-full sm:w-2/4 lg:w-1/4">
            <div class="flex justify-between mb-3">
                <div class="text-gray-800 text-right flex-1">No of Seats</div>
                <div class="text-right w-40">
                    <div class="text-gray-800 font-medium" x-html="noOfPassengers"></div>
                </div>
            </div>
            <div class="flex justify-between mb-4">
                <div class="text-sm text-gray-600 text-right flex-1">Seats Remaining</div>
                <div class="text-right w-40">
                    <div class="text-sm text-gray-600" x-html="sRemaining"></div>
                </div>
            </div>
        
            <div class="py-2 border-t border-b">
                <div class="flex justify-between">
                    <div class="text-xl text-gray-600 text-right flex-1">Amount Due</div>
                    <div class="text-right w-40">
                        <div class="text-xl text-gray-800 font-bold" x-html="totalFare"></div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="flex justify-end mt-4">
            <button type="submit" class="px-6 py-3 bg-yellow-300 text-gray-200 rounded-md hover:bg-yellow-600 focus:outline-none focus:bg-yellow-700">Save Manifest</button>
        </div>
        </form>

        <!-- Modal -->
        <div style=" background-color: rgba(0, 0, 0, 0.8)" class="fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full" x-show.transition.opacity="openModal">
            <div class="p-4 max-w-xl mx-auto relative absolute left-0 right-0 overflow-hidden mt-24">
                <div class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer"
                    x-on:click="openModal = !openModal">
                    <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                    </svg>
                </div>

                <div class="shadow w-full rounded-lg bg-white overflow-hidden w-full block p-8">
                    
                    <h2 class="font-bold text-xl mb-6 text-gray-800 border-b pb-2">Add Passenger Details</h2>
                 
                    <div class="mb-2">
                        <label class="text-gray-800 block mb-1 font-semibold text-xs uppercase tracking-wide">Passenger Name</label>
                        <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-yellow-300" id="pname" type="text" x-model="passenger.name">
                    </div>

                    <div class="flex">
                        <div class="mb-2 w-1/2 mr-2">
                        <label class="text-gray-800 block mb-1 font-semibold text-xs uppercase tracking-wide">Gender</label>
                            <select class="text-gray-700 block appearance-none w-full bg-gray-200 border-2 border-gray-200 px-4 py-1 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-yellow-300" x-model="passenger.sex">
                                <option value="">Choose</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            
                        </div>

                        <div class="mb-2 w-1/2 mr-2">
                            <label class="text-gray-800 block mb-1 font-semibold text-xs uppercase tracking-wide">Destination</label>
                            <input class="text-right mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-1 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-yellow-300" id="pdestination" type="text" x-model="passenger.destination">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="text-gray-800 block mb-1 font-semibold text-xs uppercase tracking-wide">Passenger Address</label>
                        <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-1 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-yellow-300" id="paddress" type="text" x-model="passenger.address">
                    </div>
                    <div class="flex">
                        <div class="mb-2 w-1/2 mr-2">
                         <label class="text-gray-800 block mb-1 font-semibold text-xs uppercase tracking-wide">Next Of Kin</label>
                        <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-1 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-yellow-300" id="pnextOfKin" type="text" x-model="passenger.nextOfKin">
                        </div>

                        <div class="mb-2 w-1/2 mr-2">
                           <label class="text-gray-800 block mb-1 font-semibold text-xs uppercase tracking-wide">Next of Kin Phone</label>
                        <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-1 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-yellow-300" id="pnextOfKinPhone" type="phone" x-model="passenger.nextOfKinPhone"> 
                        </div>
                    </div>
                
                    <div class="mt-6 text-right">
                        <button type="button" class="bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 border border-gray-300 rounded shadow-sm mr-2" @click="openModal = !openModal">
                            Cancel
                        </button>   
                        <button type="button" class="bg-yellow-300 hover:bg-gray-700 text-white font-semibold py-2 px-4 border border-gray-700 rounded shadow-sm" @click="addPassenger()">
                            Add Passenger
                        </button>   
                    </div>
                </div>
            </div>
        </div>
        <!-- /Modal -->
    
    <script>
       

        function manifests() {
            return {
                passengers: [],
                manifestNo: 0,
                manifestDate: '',

                sRemaining: 0,
                totalFare: 0,
                noOfPassengers: 0,
                fare: document.getElementById('fare'),
                seats: document.getElementById('seats'),
                manifesto: document.getElementById('manifestNumber'),

                passenger: {
                    id: '',
                    name: '',
                    sex: '',
                    address: '',
                    destination: '',
                    nextOfKin: '',
                    nextOfKinPhone: '',
                    manifestId: '',

                },

                
                showTooltip: false,
                showTooltip2: false,
                openModal: false,

                addPassenger() {
                    this.passengers.push({
                        id: this.generateUUID(),
                        name: this.passenger.name,
                        sex: this.passenger.sex,
                        address: this.passenger.address,
                        destination: this.passenger.destination,
                        nextOfKin: this.passenger.nextOfKin,
                        nextOfKinPhone: this.passenger.nextOfKinPhone,
                        manifestId: this.manifesto.value,
                        
                    })

                    this.passengerTotal();
                    this.passengerTotalFare();
                    this.seatsRemaining();

                    this.passenger.id = '';
                    this.passenger.name = '';
                    this.passenger.sex = '';
                    this.passenger.address = '';
                    this.passenger.destination = '';
                    this.passenger.nextOfKin = '';
                    this.passenger.nextOfKinPhone = '';
                    
                },

                deleteItem(uuid) {
                    this.passengers = this.passengers.filter(passenger => uuid !== passenger.id);

                    this.passengerTotal();
                    this.passengerTotalFare();
                    this.seatsRemaining();

                },

                passengerTotal() {
                   this.noOfPassengers = Object.keys(this.passengers).length;
                },

                seatsRemaining() {
                   this.sRemaining = this.seats.value - (Object.keys(this.passengers).length);
                },

                passengerTotalFare() {

                    this.totalFare =  this.numberFormat(this.noOfPassengers*this.fare.value);
                },

                
                generateUUID() {
                    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                        var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
                        return v.toString(16);
                    });
                },

                generateManifestNumber(minimum, maximum) {
                    const randomNumber = Math.floor(Math.random() * (maximum - minimum)) + minimum;
                    this.manifestNo = '#MNI'+ randomNumber;
                },

                numberFormat(amount) {
                    return amount.toLocaleString("en-US", {
                        style: "currency",
                        currency: "NGN"
                    });
                },

                printReciept() {
                    var printContents = this.$refs.printTemplate.innerHTML;
                    var originalContents = document.body.innerHTML;

                    document.body.innerHTML = printContents;
                    window.print();
                    document.body.innerHTML = originalContents;
                },

                loading: false,
                buttonLabel: 'Submit',

                submitPassengers() {
                  this.buttonLabel = 'Submitting...'
                  this.loading = true;
                  this.message = ''
                   //var a = ["nana", 'baba', 'kaka', ]
                  fetch('/storePassengers', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(this.manifest)
                   // data: {a:a},//<== use object here
                   // dataType:'json',// add this, as you are using res.mesg
                  })
                  .then(() => {
                      this.message = 'Form sucessfully submitted!'
                    })
                  .catch(() => {
                    this.message = 'Ooops! Something went wrong!'
                  })
                  .finally(() => {
                    this.loading = false;
                    this.buttonLabel = 'Submit'
                  })
                },


            }
        }
</script>





