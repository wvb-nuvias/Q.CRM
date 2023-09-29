<div class="h-48 max-w-sm w-full lg:max-w-full flex shadow-lg opacity-50 hover:opacity-100 transition-opacity duration-150">
  <div class="lg:h-auto w-1/3 flex-none bg-cover bg-center rounded-l lg:rounded-l-lg text-center overflow-hidden" style="background-image: url('{{ $item->thumbnail()->path }}')">
  </div>
  <div class="border-r border-b w-2/3 border-l border-gray-400 dark:border-transparent lg:border-l-0 lg:border-t bg-white dark:bg-gray-800 rounded-r lg:rounded-r-lg p-2 flex flex-col justify-between leading-normal">
    <div class="mb-8">
      <div class="flex justify-between items-center">
        @if ($item->membersonly)
        <p class="text-sm text-gray-600 dark:text-gray-300"><i class="fill-current text-gray-500 dark:text-gray-400 w-3 h-3 mr-2 fa-solid fa-sm fa-lock"></i>{{ __('Members only') }}</p>
        @else
        <p class="text-sm text-gray-600 dark:text-gray-300"><i class="fill-current text-gray-500 dark:text-gray-400 w-3 h-3 mr-2 fa-solid fa-sm fa-lock-open"></i>{{ __('Everyone') }}</p>
        @endif
        <x-actions :id="$item->id" :confirmingdelete="$confirmingdelete" :compname="$compname" />
      </div>
      <div class="flex justify-between items-center">
        <a href="/items/{{ $item->id }}">
          <div class="text-gray-900 dark:text-gray-200 font-bold text-xl">{{ $item->title }}</div>
        </a>        
      </div>
      <p class="text-gray-700 dark:text-gray-400 text-base">{{ Str::words($item->description,14,'...') }}</p>
    </div>

    <x-author :author="$item->author()" :date="$item->updated_at" />   
  </div>
</div>
