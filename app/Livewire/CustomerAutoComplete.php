<?php

namespace App\Livewire;

use Livewire\Component;
use app\Models\Customer;

class CustomerAutoComplete extends AutoComplete
{
    protected $listeners = ['valueSelected'];
    public $icon = "building-office";

    public function valueSelected(Customer $cus)
    {        
        $this->emit('SelectCustomer', $cus);
    }

    public function render()
    {
        return view('livewire.customer-auto-complete');
    }

    public function query() {
        $cuss = Customer::where('tenant',$this->user->tenantid)
        ->where('name', 'like', '%'.$this->search.'%')
        ->orderBy('name');
    }

    public function preselectquery() {
        
    }
}
