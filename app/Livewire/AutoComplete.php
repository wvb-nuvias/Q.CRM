<?php

namespace App\Livewire;

use Livewire\Component;
use app\Models\User;

abstract class AutoComplete extends Component
{
    public User $user;
    public $results;
    public $search;
    public $selected,$source, $preselect;
    public $showDropdown;

    abstract public function query();
    abstract public function preselectquery();

    public function mount($preselect)
    {
        $this->user = auth()->user();
        $this->showDropdown = false;
        $this->results = collect();

        if ($preselect!=null)
        {
            $this->selected = $preselect;
            $this->preselectquery();
        }
    }

    public function render()
    {
        return view('livewire.auto-complete');
    }

    public function updatedSelected()
    {
        $this->emitSelf('valueSelected', $this->selected);
    }

    public function updatedSearch()
    {
        if (strlen($this->search) < 2) {
            $this->results = collect();
            $this->showDropdown = false;
            return;
        }

        if ($this->query()) {
            $this->results = $this->query()->get();
        } else {
            $this->results = collect();
        }
        
        $this->selected = '';
        $this->showDropdown = true;
    }
}
