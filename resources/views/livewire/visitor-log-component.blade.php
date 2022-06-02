<div>
    <form wire:submit.prevent="save">
        {{-- Step 1 --}}
        @if ($currentStep === 1)
            <div class="form-row">

                <div class="form-group col-md-3">
                    <input type="text" class="form-control form-control-lg" value="" placeholder="Visitor's Name" wire:model="visitor_name">
                    <span class="text-danger"> @error('visitor_name') {{ $message }} @enderror </span>
                </div>

                <div class="form-group col-md-3">
                    <input type="text" class="form-control form-control-lg" value="" placeholder="Visitor's Address" wire:model="visitor_address">
                    <span class="text-danger"> @error('visitor_address') {{ $message }} @enderror </span>
                </div>

                <div class="form-group col-md-3">
                    <input type="text" class="form-control form-control-lg" placeholder="Visitor's Phone No" wire:model="visitor_phone_number">
                    <span class="text-danger"> @error('visitor_phone_number') {{ $message }} @enderror </span>
                </div>

                <div class="form-group col-md-3">
                    <select class="form-control form-control-lg text-muted" wire:model="purpose">
                        <option value="" selected="selected">Purpose of visit</option>
                        <option value="Personal">Personal</option>
                        <option value="Official">Official</option>
                        <option value="Meeting">Meeting</option>
                        <option value="Others">Others</option>
                    </select>
                    <span class="text-danger"> @error('purpose') {{ $message }} @enderror </span>
                </div>

            </div>
        @endif

        {{-- Step 2 --}}
        @if ($currentStep === 2)
            <div class="form-row">

                <div class="form-group col-md-3">
                    <input type="number" class="form-control form-control-lg" value="" placeholder="Visitor's Tag No"  wire:model="tag_number">
                    <span class="text-danger"> @error('tag_number') {{ $message }} @enderror </span>
                </div>

                <div class="form-group col-md-3">
                    <select class="form-control form-control-lg text-muted" wire:model="staff_to_see">
                        <option value="" selected="selected">Staff To See</option>
                        <option value="Personal">Personal</option>
                    </select>
                    <span class="text-danger"> @error('staff_to_see') {{ $message }} @enderror </span>
                </div>

                <div class="form-group col-md-3">
                    <input type="text" class="form-control form-control-lg" value="" placeholder="Visitor's Signature" wire:model="signature">
                    <span class="text-danger"> @error('signature') {{ $message }} @enderror </span>
                </div>

                <div class="form-group col-md-3">
                    <select class="form-control form-control-lg text-muted" wire:model="staff_company">
                        <option value="" selected="selected">Staff Company</option>
                        <option value="Tenece">Tenece</option>
                        <option value="Piewa">Piewa</option>
                        <option value="Genesys">Genesys</option>
                    </select>
                    <span class="text-danger"> @error('staff_company') {{ $message }} @enderror </span>
                </div>
            </div>
        @endif

        {{-- Step Buttons --}}
        <div class="row">

            @if ($currentStep === 2)
            <div class="col-md-3 text-left">
                <button type="button" class="btn btn-secondary btn-lg" wire:click="decreaseStep()">Back</button>
            </div>
            @endif

            @if ($currentStep === 1)
            <div class="col-md-3 text-left">
                <button type="button" class="btn btn-info btn-lg" wire:click="increaseStep()" >Next</button>
            </div>
            @endif

            @if ($currentStep === 2)
            <div class="col-md-3 text-left">
                <button type="submit" class="btn btn-success btn-lg">Submit</button>
            </div>
            @endif

        </div>
    </form>
</div>
