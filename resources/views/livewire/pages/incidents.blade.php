<x-slot name="header">
    @include('navigation-menu-helpcenter')        
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
            <p class="m-6 text-gray-500 dark:text-gray-400 leading-relaxed">
                {{ __('messages.incidentstext') }}
            </p>
        </div>
    </div>
</div>