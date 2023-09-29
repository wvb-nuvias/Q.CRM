@props(['author','date'])

<div class="flex items-center">
    <img class="h-10 w-10 rounded-full object-cover mr-2" src="{{ $author["avatar"] }}" title="{{ __('Avatar of') }}&nbsp;{{ $author["name"] }}">
    <div class="text-sm">
        <p class="text-gray-900 dark:text-gray-200 leading-none text-base">{{ $author["name"] }}</p>
        <p class="text-gray-400 dark:text-gray-400 text-sm">{{ $date->format('d/m/Y H:i') ?? ''}}</p>
    </div>
</div>