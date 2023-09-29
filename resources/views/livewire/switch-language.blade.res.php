<div class="ml-3 relative">
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button class="flex items-center space-x-1 px-4 py-2 text-sm border-2 border-transparent rounded-full dark:text-gray-500 focus:outline-none focus:border-gray-300 transition">
                <span class="pr-1 fi fi-{{ Config::get('languages')[App::getLocale()]['flag-icon'] }}"></span><span>{{ Config::get('languages')[App::getLocale()]['display'] }}</span>
            </button>
        </x-slot>
        <x-slot name="content">
            <div class="block px-4 py-2 text-xs text-gray-400">
                {{ __('messages.changelanguage') }}
            </div>

            @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                    <x-dropdown-link href="{{ route('lang.switch', $lang) }}">
                        <span class="pr-1 fi fi-{{$language['flag-icon']}}"></span>&nbsp;<span>{{ $language['display'] }}</span>
                    </x-dropdown-link>
                @endif
            @endforeach   
        </x-slot>
    </x-dropdown>
</div>