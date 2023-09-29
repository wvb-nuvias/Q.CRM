<div class="flex px-4">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('messages.helpcenter') }}
    </h2>
    <div class="flex justify-between">
        <div class="flex">
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link href="{{ route('incidents') }}" :active="request()->routeIs('incidents')">
                    {{ __('messages.incidents') }}
                </x-nav-link>
            </div>

            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link href="{{ route('kb') }}" :active="request()->routeIs('kb')">
                    {{ __('messages.kb') }}
                </x-nav-link>
            </div>
        </div>
    </div>
</div>