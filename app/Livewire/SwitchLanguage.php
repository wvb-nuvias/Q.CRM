<?php

namespace App\Livewire;

use Livewire\Component;
use app\Models\User;

class SwitchLanguage extends Component
{
    public User $user;
    
    public function mount()
    {
        $this->user = auth()->user();
    }
    
    public function render()
    {
        return view('livewire.switch-language');
    }
}
