<div>

    @if (!empty($successMessage))
        <div class="alert alert-success">
            {{ $successMessage }}
        </div>
    @endif

    <div class="stepwizard">
        <div class="grid grid-cols-2 stepwizard-row setup-panel ">
            <div class="stepwizard-step">
                <a href="#step-1" type="button"
                    class=" btn btn-circle {{ $currentStep != 1 ? 'border-blue-500' : 'bg-blue-500' }}">1</a>
                <p>Alternatif</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button"
                    class="btn btn-circle {{ $currentStep != 2 ? 'border-blue-500' : 'bg-blue-500' }}">2</a>
                <p>Kriteria</p>
            </div>
            {{-- <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-circle {{ $currentStep != 3 ? 'border-blue-500' : 'bg-blue-500' }}" disabled="disabled">3</a>
                <p>Kriteria</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn btn-circle {{ $currentStep != 4 ? 'border-blue-500' : 'bg-blue-500' }}" disabled="disabled">4</a>
                <p>input Value</p>
            </div> --}}
        </div>
    </div>

    {{-- <div class=" setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
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
    </div> --}}
    <div class="setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
        <div class="flex flex-row justify-center mt-8">
            <div class="justify-center items-center">
                <div class="form-group justify-center items-center">
                    <a href=""
                        class="w-full text-gray-800 border bg-blue-500 hover:bg-blue-600 hover:text-gray-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 "
                        data-target="#addAlternatif" data-toggle="modal" type="button">Add Alternatif</a>
                </div>
                <div>
                    <table class="table table-bordered text-center">
                        <thead class="w-full h-[48px] text-gray-300  bg-teal-800">
                            <tr>
                                <th>Alternatif</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @foreach ($alternatifTable as $alt)
                            <tr>
                                <th>{{ $alt->namealternatif }}</th>
                                <th class="w-full">
                                    <a href="" class="m-4 hover:text-blue-700" data-target="#editAlternatif"
                                        data-toggle="modal"><i class="fa fa-pen" aria-hidden="true"></i></a>
                                    <a href="" class="m-4 hover:text-red-600" wire:click="deleteAlternatif"><i
                                            class="fa fa-trash" aria-hidden="true"></i></a>

                                </th>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="flex flex-row justify-center items-center gap-4">
                    <button class="btn btn-primary nextBtn btn-lg pull-right text-gray-700" type="button"
                        wire:click="firstStepSubmit">Next</button>

                </div>
            </div>
        </div>
    </div>
    <div class="setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
        <div class="flex flex-row justify-center mt-8">
            <div class="justify-center items-center">
                <div class="form-group justify-center items-center">
                    <a href=""
                        class="w-full text-gray-800 border bg-blue-500 hover:bg-blue-600 hover:text-gray-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 "
                        data-target="#addKriteria" data-toggle="modal" type="button">Add Kriteria</a>
                </div>
                <div>
                    <table class="table table-bordered text-center">
                        <thead class="xw-full h-[48px] text-gray-300  bg-teal-800">
                            <tr>
                                <th>Criteria</th>
                                <th>Weight</th>
                                <th>Categories</th>
                                <th>Value</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @foreach ($criteriaTable as $crit)
                            <tr>
                                <th>{{ $crit->namecriteria }}</th>
                                <th>{{ $crit->weight }}</th>
                                <th>{{ $crit->categories }}</th>
                                <th>{{ $crit->values }}</th>
                                <th class="w-full">
                                    <a href="" class="m-4 hover:text-blue-700" data-target="#editCriteria"
                                        data-toggle="modal"><i class="fa fa-pen" aria-hidden="true"></i></a>
                                    <a href="" class="m-4 hover:text-red-600" wire:click="deleteCriteria"><i
                                            class="fa fa-trash" aria-hidden="true"></i></a>

                                </th>
                            </tr>
                        @endforeach
                    </table>
                </div>

                <div class="flex flex-row justify-center items-center gap-4">
                    <button class="btn btn-danger nextBtn btn-lg pull-right text-gray-700" type="button"
                        wire:click="back(2)">Back</button>
                    <a class="btn btn-success btn-lg pull-right text-gray-700"" href="{{ route('addproblems.index') }}"
                        type="button">Finish!</a>
                </div>
            </div>
        </div>
    </div>
    <div class="setup-content {{ $currentStep != 4 ? 'displayNone' : '' }}" id="step-4">
        <div class="flex flex-row justify-center mt-8">
            <div class="justify-center items-center">
                <div class="form-group justify-center items-center">
                    <a href=""
                        class="w-full text-gray-800 border bg-blue-500 hover:bg-blue-600 hover:text-gray-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 "
                        data-target="#addKriteria" data-toggle="modal" type="button">Add Kriteria</a>
                </div>
                <div>
                    <table class="table table-bordered text-center">
                        <thead class="xw-full h-[48px] text-gray-300  bg-teal-800">
                            <tr>
                                <th>Criteria</th>
                                <th>Weight</th>
                                <th>Categories</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @foreach ($criteriaTable as $crit)
                            <tr>
                                <th>{{ $crit->namecriteria }}</th>
                                <th>{{ $crit->weight }}</th>
                                <th>{{ $crit->categories }}</th>
                                <th class="w-full">
                                    <a href="" class="m-4 hover:text-blue-700" data-target="#editCriteria"
                                        data-toggle="modal"><i class="fa fa-pen" aria-hidden="true"></i></a>
                                    <a href="" class="m-4 hover:text-red-600" wire:click="deleteCriteria"><i
                                            class="fa fa-trash" aria-hidden="true"></i></a>

                                </th>
                            </tr>
                        @endforeach
                    </table>
                </div>

                <div class="flex flex-row justify-center items-center gap-4">
                    <button class="btn btn-danger nextBtn btn-lg pull-right text-gray-700" type="button"
                        wire:click="back(2)">Back</button>
                    <button class="btn btn-success btn-lg pull-right text-gray-700"" wire:click=" submitForm"
                        type="button">Finish!</button>
                </div>
            </div>
        </div>
    </div>

    @include('livewire.modal.criteria')
    @include('livewire.modal.alternatif')
    @include('livewire.modal.alternatifedit')
    @include('livewire.modal.criteriaedit')
</div>
