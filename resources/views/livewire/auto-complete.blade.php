@props([
    // name of the input field for use in forms
    'model_wire' => '',
    'modelWire' => '',
    'preselect' => '',
    'dropdown_width' => '',
    'icon' => '',
    'description' => '',
    'code' => '',
    'id' => '',
    'name' => '',
    'type' => '',
    'preselect' => '',
    'placeholder' => '',
])
@php
    if ($modelWire !== $model_wire) $model_wire = $modelWire;

@endphp
<div>
    <div
      x-cloak
      x-data="{
        open: @entangle('showDropdown'),
        search: @entangle('search'),
        selected: @entangle('selected'),
        orgId: @entangle('orgId'),
        conId: @entangle('conId'),
        artId: @entangle('artId'),
        tenId: @entangle('tenId'),
        source: @entangle('source'),
        highlightedIndex: 0,
        highlightPrevious() {
          if (this.highlightedIndex > 0) {
            this.highlightedIndex = this.highlightedIndex - 1;
            this.scrollIntoView();
          }
        },
        highlightNext() {
          if (this.highlightedIndex < this.$refs.results.children.length - 1) {
            this.highlightedIndex = this.highlightedIndex + 1;
            this.scrollIntoView();
          }
        },
        scrollIntoView() {
          this.$refs.results.children[this.highlightedIndex].scrollIntoView({
            block: 'nearest',
            behavior: 'smooth'
          });
        },
        updateSelected(id, name) {
          if (id==null) return;
          if (name==null) return;
          this.selected = id;
          this.search = name;
          this.open = false;
          this.highlightedIndex = 0;
        },
        clearSelected() {
            this.search = '';
            this.open = false;
            this.highlightedIndex = 0;
        }
    }">
        <div x-on:value-selected="updateSelected($event.detail.id, $event.detail.name)" class="relative">
        <span>

            <div>
                <x-bladewind.input
                name="{{ $name }}"
                id="{{ $name }}"
                placeholder="{{ $placeholder }}"
                class="{{ $classes }}"
                suffix="{{ $icon }}"
                suffix_is_icon="true"
                suffix_icon_div_css="rtl:!right-[unset] rtl:!left-0"
                suffix_icon_css="text-gray-300"
                required="{{ $required }}"
                clearable="false"
                is_autocomplete="true"
                disabled="{{ $disabled }}"
                selected_value="{{ $preselect }}"
                autocompletetype="{{ $type }}"
                />
            </div>
        </span>
        @php
            $cl="border-b border-gray-300 dark:border-gray-800";
            if ($dropdown_width!="")
            {
                $dropdown_width="width: ".$dropdown_width;
            }
        @endphp
        <div
            x-show="open"
            x-on:click.away="open = false" style="max-height: 270px; top: 44px; {{ $dropdown_width }}" class="absolute z-50 w-full overflow-x-hidden overflow-y-scroll bg-gray-100 border rounded-md shadow-lg dark:bg-gray-700 dark:border-gray-600">
            <ul x-ref="results" class="text-gray-600 divide-gray-100 dark:divide-gray-700 dark:text-gray-300">
                @if ($results!=null)
                    @forelse($results as $index => $result)
                        <li
                            wire:key="{{ $index }}"
                            x-on:click.stop="$dispatch('value-selected', {
                            id: {{ $result->id }},
                            name: '{{ $result->name }}'
                            })"
                            @if($index % 2 == 0)
                            :class="{
                            'bg-blue-300 dark:bg-blue-800': {{ $index }} === highlightedIndex,
                            'text-gray-900 dark:text-white': {{ $index }} === highlightedIndex,
                            'bg-gray-100 dark:bg-gray-700': {{ $index }} !== highlightedIndex,
                            'text-gray-900 dark:text-white': {{ $index }} !== highlightedIndex
                            }"
                            @else
                            :class="{
                            'bg-blue-300 dark:bg-blue-800': {{ $index }} === highlightedIndex,
                            'text-gray-900 dark:text-white': {{ $index }} === highlightedIndex,
                            'bg-gray-200 dark:bg-gray-600': {{ $index }} !== highlightedIndex,
                            'text-gray-900 dark:text-white': {{ $index }} !== highlightedIndex
                            }"
                            @endif
                            @switch($type)
                            @case("ArticleAndServiceAutocomplete")
                                data-result-id="{{ $result->id }}"
                                data-result-name="{{ $result->code }}"
                                @break
                            @default
                                data-result-id="{{ $result->id }}"
                                data-result-name="{{ $result->name }}"
                            @endswitch
                            >
                            @switch($type)
                                @case("ArticleAndServiceAutocomplete")
                                        <div class="p-3 w-full flex flex-col my-auto h-20 {{ $cl }}">
                                            <div class="text-gray-800 dark:text-gray-300">{{ $result->code }}</div>
                                            <div>{{ $result->description }}</div>
                                        </div>
                                    @break
                                @case("TenantAutocomplete")
                                    <div class="p-3 w-full flex flex-col my-auto h-20 {{ $cl }}">
                                        <div class="text-gray-800 dark:text-gray-300">{{ $result->name }}</div>
                                        <div>{{ $result->organization }}</div>
                                    </div>
                                    @break
                                @default
                                    <div class="p-3 w-full flex flex-col my-auto h-20 {{ $cl }}">
                                        <div>{{ $result->name }}</div>
                                        <div></div>
                                    </div>
                            @endswitch
                        </li>
                    @empty
                    <li>No results found</li>
                    @endforelse
                @endif
            </ul>
        </div>
        </div>
    </div>
</div>
