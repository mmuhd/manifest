@extends('layouts.base')

@section('body')

 <div class="py-2 bg-gray-100 text-gray-900 min-h-screen">

      <header class="px-5 sm:px-10 md:px-10 md:py-5 lg:px-20 flex items-center justify-between">
        <div>
          <img src="/images/manifest3.png" class="w-48">
        </div>
        <div x-data="{ navOpen: false }">
          <button @click="navOpen = true">
            <svg class="cursor-pointer text-gray-700 hover:text-gray-900 w-6 md:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="3" y1="12" x2="21" y2="12"/>
              <line x1="3" y1="6" x2="21" y2="6"/>
              <line x1="3" y1="18" x2="21" y2="18"/>
            </svg>
          </button>
          <div :class="{'hidden': !navOpen}" class="md:block fixed top-0 inset-x-0 bg-white p-8 m-4 z-30 rounded-lg shadow md:rounded-none md:shadow-none md:p-0 md:m-0 md:relative md:bg-transparent">
            <button @click="navOpen = false" class="absolute top-0 right-0 mr-5 mt-5 md:hidden">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                <path d="M18 6L6 18M6 6l12 12"/>
              </svg>
            </button>
            <div class="flex flex-col items-center justify-center md:block">
              <a href="#" class="transition-all duration-100 ease-in-out pb-1 border-b-2 text-yellow-300 border-transparent hover:border-yellow-200
              hover:text-gray-600 md:mr-8 text-lg md:text-sm font-bold tracking-wide my-4 md:my-0">
                Blog
              </a>
              <a href="/login" class="transition-all duration-100 ease-in-out pb-1 border-b-2 text-yellow-300 border-transparent hover:border-yellow-200
              hover:text-yellow-400 md:mr-8 text-lg md:text-sm font-bold tracking-wide my-4 md:my-0">
                Login
              </a>
              <button href="/signup" class="border border-transparent rounded font-semibold tracking-wide text-lg md:text-sm px-5 py-3 md:py-2
              focus:outline-none focus:shadow-outline bg-yellow-300 text-gray-100 hover:bg-yellow-400
              hover:text-gray-200 transition-all duration-300 ease-in-out my-4 md:my-0 w-full md:w-auto">
                Sign Up
              </button>
            </div>
          </div>
        </div>
      </header>

      <main>
        <div id="hero" class="pt-5 lg:flex items-center">
          <div class="px-5 sm:px-10 md:px-10 md:flex lg:block lg:w-1/2 lg:max-w-3xl lg:mr-8 lg:px-20">
            <div class="md:w-1/2 md:mr-10 lg:w-full lg:mr-0">
              <h1 class="text-3xl xl:text-4xl font-black md:leading-none xl:leading-tight">
                Welcome to Manifest!
              </h1>
              <p class="mt-4 xl:mt-2">
                A Unified Transportation Manifest System for Nigeria's Transport Sector. 
              </p>
            </div>

            <div class="flex-1">
              <div class="relative mt-4 md:mt-0 lg:mt-4">
                <div class="pl-4 pr-4 h-full absolute bottom-0 left-0 flex items-center">
                  <svg class="text-gray-700 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                  </svg>
                </div>
                <input type="text" class="w-full border bg-gray-100 px-4 py-4 text-sm tracking-wide focus:outline-none focus:shadow-outline rounded pl-12" placeholder="Type Vehicle Plate Number">
              </div>
              <div>
                <button class="transition-all duration-300 mt-5 w-full border border-transparent rounded font-semibold tracking-wide text-sm px-5 py-4 focus:outline-none focus:shadow-outline bg-yellow-300 text-gray-100 hover:bg-yellow-400 hover:text-gray-200">Get Started</button>
              </div>
            </div>
          </div>
          <div class="mt-6 w-full flex-1 lg:mt-0">
            <div></div>
            <img class="shadow-3xl shadow-outline" src="/images/buses_one.jpg" />
          </div>
        </div>

        
        <div class="px-5 sm:px-10 md:px-20 lg:px-10 xl:px-20 py-8 bg-yellow-300" id="features">
          <div class="max-w-screen-xl mx-auto">
            <h3 class="leading-none font-black text-3xl">
              Advantages
            </h3>

            <div class="flex flex-col items-center flex-wrap lg:flex-row lg:items-stretch lg:flex-no-wrap lg:justify-between">
              <div class="w-full max-w-sm mt-6 lg:mt-8 bg-gray-100 rounded shadow-lg p-12 lg:p-8 lg:mx-4 xl:p-12">
                
                <div class="mt-4 mb-4 font-extrabold text-2xl tracking-wide">
                  To Vehicle Owners
                </div>
                <div class="text-sm text-center">
                  Vehicle Owners and Investors needs tool keep track of movement of people and goods within and outside the country by accessing reliable and realtime data, Using Manifest they can also get to track their profits and thier investments.
                </div>
              </div>

              <div class="w-full max-w-sm mt-8 bg-gray-100 rounded shadow-lg p-12 lg:p-8 lg:mx-4 xl:p-12">
                
                <div class="mt-4 mb-4 font-extrabold text-2xl tracking-wide">
                  To Authorities
                </div>
                <div class="text-sm text-center">
                  Manifest built a sophisticated dashboard and analytics tools for governments, transportation regulatories authorities and other policy makers to help them make informed decisions, it also help road safety officals to conduct vehicle inspections.
                </div>
              </div>

              <div class="w-full max-w-sm mt-8 bg-gray-100 rounded shadow-lg p-12 lg:p-8 lg:mx-4 xl:p-12">
                
                <div class="mt-4 mb-4 font-extrabold text-2xl tracking-wide">
                  To Passengers
                </div>
                <div class="text-sm text-center">
                  Manifest is an accounting and ERP system for vehicle owners and investors, we build a complete dashboard and analytics for authorities and policy makers to keep track of the transportation sector, it is also a way to help reachout to passengers's next of kins in case of emergencies!
                </div>
              </div>
            </div>
          </div>
        </div>

       <div class="px-5 sm:px-10 md:px-20 lg:px-10 xl:px-20 py-8 bg-gray-100" id="cards">
          <div class="max-w-screen-xl mx-auto">
            <h3 class="leading-none font-black text-3xl">What People are Saying</h3>

            <div class="lg:flex justify-between lg:mt-8">
              <div class="lg:mx-2 flex flex-col items-center">
                <div class="flex-1 flex w-full max-w-sm pt-16 lg:pt-0">
                  <div class="w-full p-8 sm:p-12 lg:px-8 xl:px-12 shadow-lg rounded bg-gray-100 relative">
                    <div class="text-lg font-bold text-gray-700 leading-tight">Senior Officer - KAROTA</div>
                    <div>
                      <div class="flex justify-between mt-6 text-xs font-bold">
                        <div class="flex items-start">
                          <svg class="text-gray-400 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                          </svg>
                          <span class="ml-1 text-gray-500">Kano - Nigeria</span>
                        </div>

                        <div class="flex items-start ml-4">
                          <svg class="text-gray-400 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect xmlns="http://www.w3.org/2000/svg" x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                            <path xmlns="http://www.w3.org/2000/svg" d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                          </svg>
                          <span class="ml-1 text-gray-500"></span>
                        </div>
                      </div>
                      <div class="text-center flex flex-row justify-between flex-wrap justify-between items-center text-xs font-bold">
                        <span class="w-full mt-6 mx-1 p-4 rounded bg-green-200 text-green-600">This is a Solution we need right now, it could help us keep track of all vehicles loading and unloading in Kano state.</span>
                        
                      </div>
                      <div class="mt-12 flex items-center">
                        <div class="w-16 h-16 bg-cover rounded-full border-2 border-gray-700" alt="" style='background-image: url("");'></div>
                        <div class="ml-5">
                          <div class="font-bold text-gray-800">
                            Ahmad Sani
                          </div>
                          <div class="text-xs text-gray-500"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="lg:mx-2 flex flex-col items-center">
                <div class="flex-1 flex w-full max-w-sm pt-16 lg:pt-0">
                  <div class="w-full p-8 sm:p-12 lg:px-8 xl:px-12 shadow-lg rounded bg-gray-100 relative">
                    <div class="text-lg font-bold text-gray-700 leading-tight">Officer - Federal Road Safety Corps</div>
                    <div>
                      <div class="flex justify-between mt-6 text-xs font-bold">
                        <div class="flex items-start">
                          <svg class="text-gray-400 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                          </svg>
                          <span class="ml-1 text-gray-500">Lagos - Nigeria</span>
                        </div>

                        <div class="flex items-start ml-4">
                          <svg class="text-gray-400 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect xmlns="http://www.w3.org/2000/svg" x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                            <path xmlns="http://www.w3.org/2000/svg" d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                          </svg>
                          <span class="ml-1 text-gray-500"></span>
                        </div>
                      </div>
                      <div class="text-center flex flex-row justify-between flex-wrap justify-between items-center text-xs font-bold">
                        <span class="w-full mt-6 mx-1 p-1 rounded bg-purple-200 text-yellow-600">This Solution Will help us keep Track of vehicle offenders with fake documentation.</span>
                        
                      </div>
                      <div class="mt-12 flex items-center">
                        <div class="w-16 h-16 bg-cover rounded-full border-2 border-gray-700" alt=""
                            style='background-image: url("");'></div>
                        <div class="ml-4">
                          <div class="font-bold text-gray-800">
                            Adebayo O.
                          </div>
                          <div class="text-xs text-gray-500"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="lg:mx-2 flex flex-col items-center">
                <div class="flex-1 flex w-full max-w-sm pt-16 lg:pt-0">
                  <div class="w-full p-8 sm:p-12 lg:px-8 xl:px-12 shadow-lg rounded bg-gray-100 relative">
                    <div class="text-lg font-bold text-gray-700 leading-tight">Transport Vehicle - Owner</div>
                    <div>
                      <div class="flex justify-between mt-6 text-xs font-bold">
                        <div class="flex items-start">
                          <svg class="text-gray-400 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                          </svg>
                          <span class="ml-1 text-gray-500">Kaduna - Nigeria</span>
                        </div>

                        <div class="flex items-start ml-4">
                          <svg class="text-gray-400 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect xmlns="http://www.w3.org/2000/svg" x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                            <path xmlns="http://www.w3.org/2000/svg" d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                          </svg>
                          <span class="ml-1 text-gray-500"></span>
                        </div>
                      </div>
                      <div class="text-center flex flex-row justify-between flex-wrap justify-between items-center text-xs font-bold">
                        <span class="w-full mt-6 mx-1 p-1 rounded bg-yellow-200 text-yellow-600">If this system will do what it promised to do then it will be very helpful to our business</span>
                        
                      </div>
                      <div class="mt-12 flex items-center">
                        <div class="w-16 h-16 bg-cover rounded-full border-2 border-gray-700" alt=""
                        style='background-image:
                            url("");'></div>
                        <div class="ml-4">
                          <div class="font-bold text-gray-800">
                            Emeka Optimum
                          </div>
                          <div class="text-xs text-gray-500"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="px-5 sm:px-10 md:px-20 lg:px-10 xl:px-20 py-8 bg-indigo-100" id="features">
          <div class="max-w-screen-xl mx-auto">
            <h3 class="leading-none font-black text-3xl">
              Features
            </h3>

            <div class="flex flex-col items-center flex-wrap lg:flex-row lg:items-stretch lg:flex-no-wrap lg:justify-between">
              <div class="w-full max-w-sm mt-6 lg:mt-8 bg-gray-100 rounded shadow-lg p-12 lg:p-8 lg:mx-4 xl:p-12">
                <div class="p-4 inline-block bg-indigo-200 rounded-lg">
                  <svg class="text-indigo-500 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
                    <line x1="9" y1="9" x2="9.01" y2="9"/>
                    <line x1="15" y1="9" x2="15.01" y2="9"/>
                  </svg>
                </div>
                <div class="mt-4 font-extrabold text-2xl tracking-wide">
                  Comprehensive Passenger Manifest
                </div>
                <div class="text-sm">
                  Manifest helps vehcle owners, Authorities and other stakeholders with reliable data on traveling passengers and goods, we provide 
                </div>
              </div>

              <div class="w-full max-w-sm mt-8 bg-gray-100 rounded shadow-lg p-12 lg:p-8 lg:mx-4 xl:p-12">
                <div class="p-4 inline-block bg-green-200 rounded-lg">
                  <svg class="text-green-500 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="1" x2="12" y2="23"/>
                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                  </svg>
                </div>
                <div class="mt-4 font-extrabold text-2xl tracking-wide">
                  Vehicle & Passenger Tracking
                </div>
                <div class="text-sm">
                  manifest Provides tools for Tracking Vehicles carrying your goods or Lovedones up to their intended destinations, it also helps authorities identify stolen vehicles.
                </div>
              </div>

              <div class="w-full max-w-sm mt-8 bg-gray-100 rounded shadow-lg p-12 lg:p-8 lg:mx-4 xl:p-12">
                <div class="p-4 inline-block bg-red-200 rounded-lg">
                  <svg class="text-red-500 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path xmlns="http://www.w3.org/2000/svg" d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
                    <line xmlns="http://www.w3.org/2000/svg" x1="12" y1="9" x2="12" y2="13"/>
                    <line xmlns="http://www.w3.org/2000/svg" x1="12" y1="17" x2="12.01" y2="17"/>
                  </svg>
                </div>
                <div class="mt-4 font-extrabold text-2xl tracking-wide">
                  Vehicle E-Inspection
                </div>
                <div class="text-sm">
                  Authorities Such as Road Safety Corps and Vehicle Inspectors can use this tool to monitor and checlists for transport vehicles with ease.
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="px-5 sm:px-10 md:px-20 lg:px-10 xl:px-20 py-8 bg-indigo-100" id="blog-posts">
          <div class="max-w-screen-xl mx-auto">
            <div class="xl:flex">
              <div>
                <h3 class="leading-none font-black text-3xl">More About This</h3>
                <div class="flex flex-col items-center lg:flex-row lg:items-stretch lg:justify-around">
                  <a href="#" class="flex w-full max-w-sm mt-6 lg:mt-8 xl:mr-8">
                    <div class="transition-all duration-300 cursor-pointer w-full shadow-lg hover:shadow-xl rounded-lg bg-gray-100 relative">
                      <div class="w-full h-48 bg-cover rounded-t-lg" style='background-image:
                      url("images/manifest1.png");'></div>
                      <div class="p-6">
                        <div class="text-lg font-bold">Unified Transport Manifest for Nigeria</div>
                        <div class="mt-2 text-gray-900 text-sm">
                          We are in EU-Africa Post Crisis Journey to Build a Tool to provide metrics on social Mobility and Movement of Goods and Services.
                        </div>
                      </div>
                    </div>
                  </a>

                  <a href="#" class="flex w-full max-w-sm mt-6 lg:mt-8 xl:mr-8">
                    <div class="transition-all duration-300 cursor-pointer w-full shadow-lg hover:shadow-xl rounded-lg bg-gray-100 relative">
                      <div class="w-full h-48 bg-cover rounded-t-lg" style='background-image:
                      url("images/euafrica.jpeg");'></div>
                      <div class="p-6">
                        <div class="text-lg font-bold">EU-Africa Post Crisis Journey Hackathon</div>
                        <div class="mt-2 text-gray-900 text-sm">
                          Manifest is an Idea born ot of EU-Africa Post Crisis Journey
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>

            </div>
          </div>
        </div>


      </main>

      <footer class="px-5 sm:px-10 md:px-20 py-8">
        <div class="flex flex-col items-center lg:flex-row-reverse justify-between">
          <div class="">
            <a class="mx-4 text-sm font-bold text-indigo-600 hover:text-indigo-800" href="/">Home</a>
            <a class="mx-4 text-sm font-bold text-indigo-600 hover:text-indigo-800" href="/about">About Us</a>
            <a class="mx-4 text-sm font-bold text-indigo-600 hover:text-indigo-800" href="#">Careers</a>
            <!-- <a href="#">About Us</a> -->
            <!-- <a href="#">Careers</a> -->
          </div>
          <div class="mt-4">
            <img src="images/manifest4.png" class="w-32">
          </div>
          <div class="mt-4 text-xs font-bold text-gray-500">
            &copy; 2020 MANIFEST All rights Reserved  
          </div>
        </div>
      </footer>
    </div>
@endsection
