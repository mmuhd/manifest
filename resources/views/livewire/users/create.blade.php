<div>
<div class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer">
</div>

<div class="shadow w-full rounded-lg bg-white overflow-hidden w-full block p-8">

<h2 class="font-bold text-xl mb-6 text-gray-800 border-b pb-2">Add New User</h2>

<div class="mb-2">
    <label class="text-gray-800 block mb-1 font-semibold text-xs uppercase tracking-wide">User Full Name</label>
    <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-yellow-300" wire:model="name" type="text">
</div>

<div class="flex">
	<div class="mb-2 w-1/2 mr-2">
        <label class="text-gray-800 block mb-1 font-semibold text-xs uppercase tracking-wide">Email</label>
        <input class="text-right mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-1 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-yellow-300" wire:model="email" type="email">
    </div>    

    <div class="mb-2 w-1/2 mr-2">
        <label class="text-gray-800 block mb-1 font-semibold text-xs uppercase tracking-wide">Password</label>
        <input class="text-right mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-1 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-yellow-300" wire:model="password" type="password">
    </div>
</div>
<div class="flex">
<div class="mb-2 w-1/2 mr-2">
    <label class="text-gray-800 block mb-1 font-semibold text-xs uppercase tracking-wide">Status</label>
        <select class="text-gray-700 block appearance-none w-full bg-gray-200 border-2 border-gray-200 px-4 py-1 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-yellow-300" wire:model="status">
            <option value="">Choose</option>
            <option value="Available">Available</option>
            <option value="Suspended">Suspended</option>
        </select>        
    </div>

    <div class="mb-2 w-1/2 mr-2">
    <label class="text-gray-800 block mb-1 font-semibold text-xs uppercase tracking-wide">Role</label>
        <select class="text-gray-700 block appearance-none w-full bg-gray-200 border-2 border-gray-200 px-4 py-1 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-yellow-300" wire:model="role">
            <option value="">Choose</option>
            <option value="Admin">Admin</option>
            <option value="Agent">Agent</option>
            <option value="Other">Other</option>
        </select>  
    </div>
</div>
    <div class="mb-2">
    <label class="text-gray-800 block mb-1 font-semibold text-xs uppercase tracking-wide">Title</label>
    <input class="mb-1 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-yellow-300" wire:model="title" type="text">
</div>


<div class="mt-6 text-right">
    <button type="button" class="bg-yellow-300 hover:bg-gray-700 text-white font-semibold py-2 px-4 border border-gray-700 rounded shadow-sm" wire:click="store()">
        Add User
    </button>   
</div>
</div>

</div>   