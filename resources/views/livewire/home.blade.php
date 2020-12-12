@extends('layouts.base')

@section('title', __('Home'))

 
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
                <a href="/home" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fas fa-home fa-fw mr-3 text-yellow-300"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Home</span>
                </a>
            </li>
            <li class="my-2 md:my-0 ">
                <a href="/tickets" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fas fa-ticket-alt fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Ticketing</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="/manifest" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fa fa-clipboard-list fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Manifest</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="/vehicles" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fas fa-bus fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Vehicles</span>
                </a>
            </li>
            <li class="my-2 md:my-0 mb-8">
                <a href="/settings" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fa fa-cogs fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Settings</span>
                </a>
            </li>
            <li class="my-2 md:my-0">
                <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
                    <i class="fa fa-question-circle fa-fw mr-3"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Support</span>
                </a>
            </li>
        </ul>

    </div>


    @if (Auth::user()->role == 'Admin')
                  <livewire:dashboard />  
                @else
                <!--Graph Content -->
        <div id="main-content" class="w-full flex-1">

            <div class="flex flex-1 flex-wrap">
                <div class="text-gray-600 text-4xl font-light items-center text-center p-20 ml-24">Welcome to Manifest! You have No Data Yet, Please Register Your Vehicles and Begin Submitting Manifests</div>
                
            </div>

        </div>
                
        @endif






<script>
    function handler() {
    return {

        loading: false,
        buttonLabel: 'Submit',

        submitData() {
          this.buttonLabel = 'Submitting...'
          this.loading = true;
          this.message = ''
            
          fetch('/save', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(this.field)
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