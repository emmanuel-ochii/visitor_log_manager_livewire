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
    public $staff_company;
    public $visitor_time_out;

    public $totalSteps = 2;
    public $currentStep = 1;

    public function mount()
    {
        $this->currentStep===1;
    }

    public function render()
    {
        return view('livewire.visitor-log-component');
    }

    public function increaseStep()
    {
        $this->resetErrorBag();
        $this->validateFormData();

        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep === $this->totalSteps;
        }
    }

    public function decreaseStep()
    {
        $this->resetErrorBag();

        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }

    public function validateFormData()
    {
        if ($this->currentStep === 1) {
            $this->validate([
                'visitor_name' => 'required|string',
                'visitor_address' => 'required|string',
                'visitor_phone_number' => 'required|string',
                'purpose' =>'required|string',
            ]);
        }
    }

    public function save()
    {
        $this->resetErrorBag();
        if ($this->currentStep === 2) {
            $this->validate([
                'tag_number' => 'required|numeric|max:3',
                'staff_to_see' => 'required|string',
                'signature' => 'required|string',
                'staff_company' => 'required|string',
            ]);
            \dd('data');
        }
    }
}
