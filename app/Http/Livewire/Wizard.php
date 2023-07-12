<?php

namespace App\Http\Livewire;

use App\Models\Alternatif;
use App\Models\Criterias;
use App\Models\Problems;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Wizard extends Component
{
    public $currentStep = 1;
    public $namecriteria = [];
    public $weight = [];
    public $categories = [];
    public $nameproblems, $namealternatif;
    public $successMessage = '';

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        return view('livewire.wizard');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'nameproblems' => 'required',
        ]);

        Problems::create([
            'nameproblems' => $this->nameproblems,
            'user_id' => Auth::user()->id
        ]);

        $this->currentStep = 2;
    }

    /**
     * Write code on Method 
     *
     * @return response()
     */
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'namealternatif' => 'required',
        ]);

        $this->currentStep = 3;
    }

    /**
     * Write code on Method 
     *
     * @return response()
     */

    public function thirdStepSubmit()
    {

        $validatedData = $this->validate([
            'namecriteria' => 'nullable',
            'weight' => 'nullable',
            'categories' => 'nullable',
        ]);

        $this->currentStep = 3;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm()
    {
        Problems::create([
            'name' => $this->name
        ]);
        Criterias::create([
            'namecriteria' => $this->namecriteria,
            'weight' => $this->weight,
            'categories' => $this->categories
        ]);

        $problems = new Problems();

        Alternatif::create([
            'namealternatif' => $this->namealternatif,
            'project_id' => $problems->id
        ]);

        $this->successMessage = 'Product Created Successfully.';

        $this->clearForm();

        $this->currentStep = 1;
    }

    public function submitCriteria()
    {
        $validatedData = $this->validate([
            'namecriteria' => 'nullable',
            'weight' => 'nullable',
            'categories' => 'nullable',
        ]);

        $alternatif = new Alternatif();

        Criterias::create([
            'namecriteria' => $this->namecriteria,
            'weight' => $this->weight,
            'categories' => $this->categories,
            'alter_id' => $alternatif->id
        ]);

        $this->clearForm();
    }
    public function submitAlternatif()
    {
        $validatedData = $this->validate([
            'namealternatif' => 'nullable'
        ]);

        $problems = new Problems();

        // Alternatif::create([
        //     'namealternatif' => $this->namealternatif,
        //     'project_id' => $problems->id
        // ]);


        $this->clearForm();
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function clearForm()
    {
        $this->namecriteria = '';
        $this->nameproblems = '';
        $this->weight = '';
        $this->categories = '';
        $this->namealternatif = '';
    }
}
