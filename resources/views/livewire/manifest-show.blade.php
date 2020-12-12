

@section('title', __('Generated Manifest'))

<div>
<!-- Print Template -->
    @foreach($man as $m)
		<div  class="container items-center p-4 md:ml-4">
			<div class="mb-8 flex justify-between">
				<div>
					<h2 class="text-3xl font-bold mb-6 pb-2 tracking-wider uppercase text-center">manifest</h2>

					<div class="mb-1 flex items-center">
						<label class="w-32 text-gray-800 block font-bold text-xs uppercase tracking-wide">manifest No.</label>
						<span class="mr-4 inline-block">:</span>
						<div>{{ $m->manifestId }}</div>
					</div>
		
					<div class="mb-1 flex items-center">
						<label class="w-32 text-gray-800 block font-bold text-xs uppercase tracking-wide">manifest Date</label>
						<span class="mr-4 inline-block">:</span>
						<div>{{ $m->created_at }}</div>
					</div>
						@endforeach

						@foreach($veh as $v)				
					<div class="mb-1 flex items-center">
						<label class="w-32 text-gray-800 block font-bold text-xs uppercase tracking-wide">Vehicle</label>
						<span class="mr-4 inline-block">:</span>
						<div>{{ $v->plate_number }}</div>
					</div>

					<div class="mb-1 flex items-center">
						<label class="w-32 text-gray-800 block font-bold text-xs uppercase tracking-wide">Driver name</label>
						<span class="mr-4 inline-block">:</span>
						<div>{{ $v->vehicle_type }}</div>
					</div>

				</div>
				@endforeach
				<div class="pr-5">
					<div class="w-32 h-32 mb-1 overflow-hidden">
						<img id="image2" class="object-cover w-20 h-20" />
					</div>
				</div>
			</div>
			@foreach($man as $m)
			<div class="flex justify-between mb-10">
				<div class="w-1/2">
					<label class="text-gray-800 block mb-2 font-bold text-xs uppercase tracking-wide">From:</label>
					<div>
						<div>{{ $m->travelFrom }}</div>
						
					</div>
				</div>
				<div class="w-1/2">
					<label class="text-gray-800 block mb-2 font-bold text-xs uppercase tracking-wide">To:</label>
					<div>
						<div>{{ $m->travelTo }}</div>
						
					</div>
				</div>
			</div>
				@endforeach

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
			
		@foreach($pas as $p)

            <div class="flex -mx-1 py-2 border-b">
                <div class="flex-1 px-2">
                    <p class="text-gray-800 text-xs">{{ $p->name }}</p>

                </div>

                <div class="flex-1 px-2 text-right">
                    <p class="text-gray-800 text-xs">{{ $p->sex }}</p>

                </div>

                <div class="flex-1 px-2 text-right">
                    <p class="text-gray-800 text-xs">{{ $p->address }}</p>

                </div>

                <div class="flex-1 px-2 text-right">
                    <p class="text-gray-800 text-xs">{{ $p->destination }}</p>

                </div>

                <div class="flex-1 px-2 text-right">
                    <p class="text-gray-800 text-xs">{{ $p->nextOfKin }}</p>
                </div>

                <div class="flex-1 px-2 text-right">
                    <p class="text-gray-800 text-xs">{{ $p->nextOfKinPhone }}</p>
                </div>
            </div>
				@endforeach

	@foreach($veh as $v)				
			
			<div class="py-2 ml-auto mt-20" style="width: 320px">
				<div class="flex justify-between mb-3">
					<div class="text-gray-800 text-right flex-1">Driver Phone</div>
					<div class="text-right w-40">
						<div class="text-gray-800 font-medium">{{ $v->driver_phone }}</div>
					</div>
				</div>
				<div class="flex justify-between mb-4">
					<div class="text-sm text-gray-600 text-right flex-1">Driver License</div>
					<div class="text-right w-40">
						<div class="text-sm text-gray-600">{{ $v->driver_license_id }}</div>
					</div>
				</div>
			
				<div class="py-2 border-t border-b">
					<div class="flex justify-between">
						<div class="text-xl text-gray-600 text-right flex-1">Driver Name</div>
						<div class="text-right w-40">
							<div class="text-xl text-gray-800 font-semibold">{{ $v->driver_name }}</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach

		<!-- /Print Template -->
        

</div>