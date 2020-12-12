<button type="{{ $type ?? 'submit' }}" {{ $attributes }} wire:loading.class.remove="bg-yellow-300"
    wire:loading.class="bg-yellow-400 cursor-wait" wire:loading.attr="enabled"
    class="flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-600 bg-yellow-300 border border-transparent rounded-md hover:bg-yellow-200 focus:outline-none focus:border-yellow-600 focus:shadow-outline-yellow active:bg-yellow-500 transition duration-150 ease-in-out">
    {{ $slot }}
</button>