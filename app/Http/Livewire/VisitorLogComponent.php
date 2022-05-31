<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Model\Visitorlog;

class VisitorLogComponent extends Component
{
    public $visitor_name;
    public $visitor_address;
    public $visitor_phone_number;
    public $staff_to_see;
    public $tag_number;
    public $signature;
    public $purpose;
    public $visitor_time_out;

    public $totalSteps = 3;
    public $currentStep = 1;

    public function mount()
    {
        $this->currentStep=1;
    }

    public function render()
    {
        return view('livewire.visitor-log-component');
    }

    public function increaseStep()
    {
        $this->currentStep++;
    }

    public function decreaseStep()
    {
        $this->currentStep--;
    }
}
