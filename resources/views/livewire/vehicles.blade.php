<div>
@extends('layouts.base')

@section('title', __('Home'))

 
<div class="flex h-screen bg-gray-50 font-sans">
    <style>
        .nunito {
            font-family: 'nunito', font-sans;
        }
        
        .border-b-1 {
            border-bottom-width: 1px;
        }
        
        .border-l-1 {
            border-left-width: 1px;
        }
        
        hover\:border-none:hover {
            border-style: none;
        }
        
        #sidebar {
            transition: ease-in-out all .3s;
            z-index: 9999;
        }
        
        #sidebar span {
            opacity: 0;
            position: absolute;
            transition: ease-in-out all .1s;
        }
        
        #sidebar:hover {
            width: 150px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            /*shadow-2xl*/
        }
        
        #sidebar:hover span {
            opacity: 1;
        }
    </style>
    <!-- Side bar-->
    <div id="sidebar" class="h-screen w-16 menu bg-white text-white px-4 flex items-center nunito static fixed shadow">

        <ul class="list-reset ">
            <li class="my-2 md:my-0">
                <a href="/home" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-yellow-400">
                    <i class="fas fa-home fa-fw mr-3 "></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Home</span>
                </a>
            </li>
            <li class="my-2 md:my-0 ">
                <a href="/tickets" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-yellow-400">
                    <i class="fas fa-ticket-alt fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Ticketing</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="/manifest" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-yellow-400">
                    <i class="fa fa-clipboard-list fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Manifest</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="/vehicles" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-yellow-400">
                    <i class="fas fa-bus fa-fw mr-3 text-yellow-300"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Vehicles</span>
                </a>
            </li>
            <li class="my-2 md:my-0 mb-8">
                <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-yellow-400">
                    <i class="fa fa-cogs fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Settings</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-yellow-400">
                    <i class="fa fa-question-circle fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Support</span>
                </a>
            </li>
        </ul>

    </div>

    
    
        <!--Graph Content -->
        <div id="main-content" class="items-center p-20 mr-3">

            <div class="flex flex-1 flex-wrap items-center">

					       <div class="section">
					   <h3 class="text-gray-700 text-3xl font-semibold">Vehicles</h3>

					    <div class="mt-8">

					        <div class="mt-4">
					            <div class="p-6 bg-white rounded-md shadow-md" wire:submit.prevent="submitVehicle">
					                
					            <div x-data="{ isOpen: false }">
					            <button class="px-4 py-2 bg-yellow-300 text-gray-700 rounded-md hover:bg-yellow-500 focus:outline-none focus:bg-yellow-500" x-on:click=" isOpen = !isOpen">Add New Vehicle</button>
					                <form x-show="isOpen">
					                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
					                    	<div>
										        <label class="text-gray-700" for="vehicle_type">Vehicle Type</label>

										        <select  wire:model.debounce.500ms="vehicle_type" class="form-input w-full mt-2 rounded-md focus:border-yellow-200" placeholder="Choose" name="vehicle_type">
										            <option value=''>Choose a Type</option>
										            <option value='Car'>Car</option>
										            <option value='Bus'>Bus</option>
										            <option value='Lorry'>Lorry</option>
										            <option value='Luxury Bus'>Luxury Bus</option>
										        </select>
										    </div>
										    <div>
										        <label class="text-gray-700" for="vehicle_color">Vehicle Color</label>

										        <select  wire:model.debounce.500ms="vehicle_color" class="form-input w-full mt-2 rounded-md focus:border-yellow-200"  placeholder="Choose" name="vehicle_color">
										            <option value=''>Choose a Color</option>
										            <option value='Black'>Black</option>
										            <option value='White'>White</option>
										            <option value='Red'>Red</option>
										            <option value='Green'>Green</option>
										            <option value='Blue'>Blue</option>
										            <option value='Other'>Other</option>
										        </select>
										    </div>
										    <div>
										        <label class="text-gray-700" for="vehicle_brand">Vehicle Brand</label>

										        <select  wire:model.debounce.500ms="vehicle_brand" class="form-input w-full mt-2 rounded-md focus:border-yellow-200"  placeholder="Choose" name="vehicle_brand">
										            <option value=''>Choose a Brand</option>
										            <option value='Toyota'>Toyota</option>
										            <option value='Volkswagen'>Volkswagen</option>
										            <option value='Mercedes'>Mercedes</option>
										            <option value='Other'>Other</option>
										        </select>
										    </div>
					                        <div>
					                            <label class="text-gray-700" for="plate_number">Plate Number</label>
					                            <input placeholder="Vehicle Plate Number" class="form-input w-full mt-2 rounded-md focus:border-yellow-200" type="text" wire:model.debounce.500ms="plate_number" name="plate_number">
					                            @error('plate_number') <span class="error text-red-500 text-xs">{{ $message }}</span> @enderror
					                        </div>

					                        <div>
					                            <label class="text-gray-700" for="chasis_number">Chasis Number</label>
					                            <input placeholder="Chasis Number" class="form-input w-full mt-2 rounded-md focus:border-yellow-200" type="text" wire:model.debounce.500ms="chasis_number" name="chasis_number">
					                            @error('chasis_number') <span class="error text-red-500 text-xs">{{ $message }}</span> @enderror
					                        </div>

					                        <div>
					                            <label class="text-gray-700" for="owner_name">Owner Name</label>
					                            <input placeholder="Owner Name" class="form-input w-full mt-2 rounded-md focus:border-yellow-200" type="text" wire:model.debounce.500ms="owner_name" name="owner_name">
					                            @error('owner_name') <span class="error text-red-500 text-xs">{{ $message }}</span> @enderror
					                        </div>

					                        <div>
					                            <label class="text-gray-700" for="owner_phone">Owner Phone</label>
					                            <input placeholder="Owner Phone" class="form-input w-full mt-2 rounded-md focus:border-yellow-200" type="text" wire:model.debounce.500ms="owner_phone" name="owner_phone">
					                            @error('owner_phone') <span class="error text-red-500 text-xs">{{ $message }}</span> @enderror
					                        </div>

					                        <div>
					                            <label class="text-gray-700" for="owner_address">Owner Address</label>
					                            <input placeholder="Owner Address" class="form-input w-full mt-2 rounded-md focus:border-yellow-200" type="text" wire:model.debounce.500ms="owner_address" name="owner_address">
					                            @error('owner_address') <span class="error text-red-500 text-xs">{{ $message }}</span> @enderror
					                        </div>

					                        <div>
					                            <label class="text-gray-700" for="driver_name">Driver Name</label>
					                            <input placeholder="Driver Name" class="form-input w-full mt-2 rounded-md focus:border-yellow-200" type="text" wire:model.debounce.500ms="driver_name" name="driver_name">
					                            @error('owner_driver') <span class="error text-red-500 text-xs">{{ $message }}</span> @enderror
					                        </div>

					                        <div>
					                            <label class="text-gray-700" for="driver_phone">Driver Phone</label>
					                            <input placeholder="Driver Phone" class="form-input w-full mt-2 rounded-md focus:border-yellow-200" type="text" wire:model.debounce.500ms="driver_phone" name="driver_phone">
					                            @error('driver_phone') <span class="error text-red-500 text-xs">{{ $message }}</span> @enderror
					                        </div>

					                        <div>
					                            <label class="text-gray-700" for="driver_address">Driver Address</label>
					                            <input placeholder="Driver Address" class="form-input w-full mt-2 rounded-md focus:border-yellow-200" type="text" wire:model.debounce.500ms="driver_address" name="driver_address">
					                            @error('driver_address') <span class="error text-red-500 text-xs">{{ $message }}</span> @enderror
					                        </div>

					                        <div>
					                            <label class="text-gray-700" for="driver_license_id">Driver License ID</label>
					                            <input placeholder="Driver License Number" class="form-input w-full mt-2 rounded-md focus:border-yellow-200" type="text" wire:model.debounce.500ms="driver_license_id" name="driver_license_id">
					                            @error('driver_license_id') <span class="error text-red-500 text-xs">{{ $message }}</span> @enderror
					                        </div>

					                       
					                
					                    </div>

					                    <div class="flex justify-end mt-4">
					                        <button type="submit" class="px-4 py-2 bg-yellow-300 text-gray-700 rounded-md hover:bg-yellow-200 focus:outline-none focus:bg-yellow-500">Submit</button>
					                    </div>
					                    <div>

					                         @if (session()->has('message'))
					                             <div class="p-3 bg-green-300 text-green-800 rounded shadow-sm">
					                                {{ session('message') }}
					                             </div>
					                         @endif
					                    </div>
					                </form>
					            </div>
					            </div>
					        </div>
					    </div>
					</div>


            </div>

        </div>

    </div>



</div>
