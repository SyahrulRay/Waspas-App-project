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
    public $alternatifTable = [];
    public $criteriaTable = [];
    public $editalternatif;



    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        $problems = Problems::latest()->first();
        $problems_id = $problems['id'];
        $alternatif = Alternatif::latest()->first();
        $alter_id = $alternatif['id'];
        $this->alternatifTable = Alternatif::where('project_id', $problems_id)->get();
        $this->criteriaTable = Criterias::where('alter_id', $alter_id)->get();
        return view('livewire.wizard');
    }

    public function boot()
    {
        $problems = Problems::latest()->first();
        $problems_id = $problems['id'];
        $alternatif = Alternatif::latest()->first();
        $alter_id = $alternatif['id'];
        $this->alternatifTable = Alternatif::where('project_id', $problems_id)->get();
        $this->criteriaTable = Criterias::where('alter_id', $alter_id)->get();
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
            'namealternatif' => 'nullable',
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
        $problems = Problems::latest()->first();
        $problems_id = $problems['id'];
        $alternatif = Alternatif::latest()->first();
        $alter_id = $alternatif['id'];
        $this->alternatifTable = Alternatif::where('project_id', $problems_id)->get();
        $this->criteriaTable = Criterias::where('alter_id', $alter_id)->get();
        $alternatif = Alternatif::latest()->first();
        $alter_id = $alternatif['id'];

        Criterias::create([
            'namecriteria' => $this->namecriteria,
            'weight' => $this->weight,
            'categories' => $this->categories,
            'alter_id' => value($alter_id)
        ]);

        $this->clearForm();
    }
    public function submitAlternatif()
    {
        $validatedData = $this->validate([
            'namealternatif' => 'nullable'
        ]);
        $problems = Problems::latest()->first();
        $problems_id = $problems['id'];
        $alternatif = Alternatif::latest()->first();
        $alter_id = $alternatif['id'];
        $this->alternatifTable = Alternatif::where('project_id', $problems_id)->get();
        $this->criteriaTable = Criterias::where('alter_id', $alter_id)->get();
        $problems = Problems::latest()->first();
        $problems_id = $problems['id'];

        Alternatif::create([
            'namealternatif' => $this->namealternatif,
            'project_id' => value($problems_id),
        ]);

        $this->clearForm();
    }

    public function deleteCriteria()
    {
       
    }
    public function deleteAlternatif()
    {
        
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
