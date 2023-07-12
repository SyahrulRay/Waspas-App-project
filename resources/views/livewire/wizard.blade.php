<div>

    @if(!empty($successMessage))
    <div class="alert alert-success">
        {{ $successMessage }}
    </div>
    @endif

    <div class="stepwizard">
        <div class="grid grid-cols-3 stepwizard-row setup-panel ">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class=" btn btn-circle {{ $currentStep != 1 ? 'border-blue-500' : 'bg-blue-500' }}">1</a>
                <p>Judul Masalah</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-circle {{ $currentStep != 2 ? 'border-blue-500' : 'bg-blue-500' }}">2</a>
                <p>Kriteria</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-circle {{ $currentStep != 3 ? 'border-blue-500' : 'bg-blue-500' }}" disabled="disabled">3</a>
                <p>Alternatif</p>
            </div>
        </div>
    </div>

    <div class=" setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
        <div class="flex flex-row justify-center ">
            <div class="items-center gap-6 mt-8">
                <div class="form-group items-center">
                    <label for="title">Judul Permasalahan:</label>
                    <input type="text" wire:model="nameproblems" class="form-control rounded-lg" id="taskTitle">
                    @error('nameproblems') <span class="error">{{ $message }}</span> @enderror
                </div>

                <button class="btn btn-primary text-gray-600 w-full h-12 nextBtn btn-lg pull-right" wire:click="firstStepSubmit" type="button">Next</button>
            </div>
        </div>
    </div>
    <div class="setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
        <div class="flex flex-row justify-center mt-8">
            <div class="justify-center items-center">
                <div class="form-group justify-center items-center">
                    <a href="" class="w-full text-gray-800 border bg-blue-500 hover:bg-blue-600 hover:text-gray-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 " data-target="#addKriteria" data-toggle="modal" type="button">Add Kriteria</a>
                </div>
                <div>
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Criteria</th>
                                <th>Weight</th>
                                <th>Categories</th>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="flex flex-row justify-center items-center gap-4">
                    <button class="btn btn-danger nextBtn btn-lg pull-right text-gray-700" type="button" wire:click="back(1)">Back</button>
                    <button class="btn btn-primary nextBtn btn-lg pull-right text-gray-700" type="button" wire:click="secondStepSubmit">Next</button>
                </div>
            </div>
        </div>
    </div>
    <div class="setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
        <div class="flex flex-row justify-center mt-8">
            <div class="justify-center items-center">
                <div class="form-group justify-center items-center">
                    <a href="" class="w-full text-gray-800 border bg-blue-500 hover:bg-blue-600 hover:text-gray-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 " data-target="#addAlternatif" data-toggle="modal" type="button">Add Alternatif</a>
                </div>
                <div>
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Alternatif</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="flex flex-row justify-center items-center gap-4">
                    <button class="btn btn-danger nextBtn btn-lg pull-righ text-gray-700" t" type="button" wire:click="back(2)">Back</button>
                    <button class="btn btn-success btn-lg pull-right text-gray-700"" wire:click=" submitForm" type="button">Finish!</button>
                </div>
            </div>
        </div>
    </div>
    @include('livewire.modal.criteria')
    @include('livewire.modal.alternatif')
</div>