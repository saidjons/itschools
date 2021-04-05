<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LeadGeneratorForm extends Component
{
    public $count=0;

    public function count()
    {
        $this->count++;
    }
    public function render()
    {
        return view('livewire.lead-generator-form')
        ->layout('layouts.livewire');
    }
}
