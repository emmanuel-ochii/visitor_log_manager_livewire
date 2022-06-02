<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Visitorlog;

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

    public function register()
    {
        $cv_name = 'CV_'.$this->cv->getClientOriginalName();
        $upload_cv = $this->cv->storeAs('students_cvs', $cv_name);

        if ($upload_cv) {
            $values ='';
            Student::insert($values);
            //   $this->reset();
            //   $this->currentStep = 1;
            $data = ['name'=>$this->first_name.' '.$this->last_name,'email'=>$this->email];
            return redirect()->route('registration.success', $data);
        }
    }

    public function save()
    {
        $this->resetErrorBag();
        // $this->validate();
        if ($this->currentStep === 2) {
            $this->validate([
                'tag_number' => 'required|numeric|max:3',
                'staff_to_see' => 'required|string',
                'signature' => 'required|string',
                'staff_company' => 'required|string',
            ]);
        }

        Visitorlog::insert([
            'visitor_name' => $this->visitor_name,
            'visitor_address' => $this->visitor_address,
            'visitor_phone_number' => $this->visitor_phone_number,
            'staff_to_see' => $this->staff_to_see,
            'tag_number' => $this->tag_number,
            'signature' => $this->signature,
            'purpose' => $this->purpose,
            'staff_company' => $this->staff_company,
            'visitor_time_out' => $this->visitor_time_out,
        ]);



        $data = ['visitor_name'=>$this->visitor_name];

        // dd($data);

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Visitor Logged In Successfully!',
            'text' => request()->email,
        ]);
        $this->reset();

        // return redirect()->route('registration.success', $data);
    }
}
