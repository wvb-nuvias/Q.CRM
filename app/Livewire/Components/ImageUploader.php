<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class ImageUploader extends Component
{
    use WithFileUploads;

    public $files = [];

    public $imageerror="";

    //#[Validate('image|mimes:png,jpg,gif|max:1024')] // 1MB Max
    public $image;

    public function rules()
    {
        return [
            'image' => 'mimes:png,jpg,gif|max:1024',
        ];
    }

    public function render()
    {
        return view('livewire.components.image-uploader');
    }

    public function updatedImage($value)
    {
        if ($value) {
            $this->dispatch('image-selected', $value->getPathname());
        } else {
            $this->dispatch('image-selected', null);
        }

    }
}
