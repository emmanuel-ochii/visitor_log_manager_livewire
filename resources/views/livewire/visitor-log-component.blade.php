<div>
    {{-- The whole world belongs to you. --}}
    <form class="boats-skipper-form" wire:submit.prevent="save">

        {{-- Step 1 --}}
        @if ($currentStep === 1)
            <div class="row">
                <div class="col-xl-12">
                    <div class="input-box">

                        <input type="text" value="" placeholder="Visitor's Name" wire:mode="visitor_name">
                        <span class="text-danger">
                            @error('visitor_name')
                                {{ $message }}
                            @enderror
                        </span>

                        <div class="icon-box">
                            <span class="flaticon-user"></span>
                        </div>
                    </div>
                    <div class="input-box">

                        <input type="text" wire:model="visitor_address" value="" placeholder="Visitor's Address">
                        <span class="text-danger">
                            @error('visitor_address')
                                {{ $message }}
                            @enderror
                        </span>

                        <div class="icon-box">
                            <span class="flaticon-user"></span>
                        </div>
                    </div>
                    <div class="input-box">

                        <input type="text" wire:model="visitor_phone_number" value="" placeholder="Visitor's Phone No">
                        <span class="text-danger">
                            @error('visitor_phone_number')
                                {{ $message }}
                            @enderror
                        </span>

                        <div class="icon-box">
                            <span class="flaticon-user"></span>
                        </div>
                    </div>
                    <div class="button-box">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </div>
        @endif

        {{-- Step 2 --}}

        @if ($currentStep === 2)
            <div class="row">
                <div class="col-xl-12">
                    <div class="input-box">
                        <select class="selectpicker" wire:model="purpose" data-width="100%">
                            <option value="" selected="selected">Purpose of visit</option>
                            <option value="Personal">Personal</option>
                            <option value="Official">Official</option>
                            <option value="Meeting">Meeting</option>
                            <option value="Others">Others</option>
                        </select>
                        <span class="text-danger">
                            @error('purpose')
                                {{ $message }}
                            @enderror
                        </span>

                        <div class="icon-box two">
                            <span class="fa fa-user"></span>
                        </div>
                    </div>
                    <div class="input-box">
                        <input type="text" wire:model="tag_number" value="" placeholder="Visitor's Tag No">
                        <div class="icon-box">
                            <span class="flaticon-user"></span>
                        </div>
                    </div>
                    <div class="input-box">

                        <select class="selectpicker" wire:model="staff_to_see" data-width="100%">
                            <option value="" selected="selected">Staff to see</option>
                            <option value="staff_1">Staff 1</option>
                            <option value="staff_2">Staff 2k</option>
                            <option value="staff_3">Staff 3</option>
                        </select>
                        <span class="text-danger">
                            @error('staff_to_see')
                                {{ $message }}
                            @enderror
                        </span>

                        <div class="icon-box two">
                            <span class="flaticon-team"></span>
                        </div>
                    </div>
                </div>
            </div>
        @endif


        {{-- Step 3 --}}
        @if ($currentStep === 3)
            <div class="row">
                <div class="col-xl-12">
                    <div class="input-box">
                        <textarea wire:model="signature" placeholder="Signature"></textarea>
                        <span class="text-danger">
                            @error('signature')
                                {{ $message }}
                            @enderror
                        </span>

                        <div class="icon-box">
                            <span class="flaticon-calendar"></span>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-xl-12">
                <div class="button-box col-">
                    <button type="submit">Submit</button>
                </div>
                <div class="button-box">
                    <button type="submit">Submit</button>
                </div>
                <div class="button-box">
                    <button type="submit">Submit</button>
                </div>

                {{-- @if ($currentStep === 1)
                    <div class=""></div>
                @endif

                @if ($currentStep === 2 || $currentStep === 3)
                    <div class="button-box">
                        <button type="button" wire:click="decreaseStep()">Back</button>
                    </div>
                @endif

                @if ($currentStep === 1 || $currentStep === 2)
                    <div class="button-box">
                        <button type="button" wire:click="increaseStep()">Next</button>
                    </div>
                @endif

                @if ($currentStep === 3)
                    <div class="button-box">
                        <button type="submit">Back</button>
                    </div>
                @endif --}}
            </div>
        </div>


    </form>
</div>
