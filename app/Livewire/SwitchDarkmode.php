<?php

namespace App\Livewire;

use app\Models\User;
use Livewire\Component;

class SwitchDarkmode extends Component
{       
    public User $user;

    public function mount()
    {
        $this->user = auth()->user();
    }
    
    public function render()
    {
        return view('livewire.switch-darkmode');
    }
        
}
