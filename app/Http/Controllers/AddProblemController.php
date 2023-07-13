<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Criterias;
use App\Models\Problems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AddProblemController extends Controller
{

    public $currentStep = 1;
    public $namecriteria = [];
    public $weight = [];
    public $categories = [];
    public $value = [];
    public $nameproblems, $namealternatif;
    public $successMessage = '';
    public $alternatifTable = [];
    public $criteriaTable = [];
    public $editalternatif;
    public $problemsTable;





    public function index()
    {

        $this->problemsTable = Problems::latest()->first();
        $problems = Problems::latest()->first();
        $problems_id = $problems['id'];
        $alternatif = Alternatif::latest()->first();
        $alter_id = $alternatif['id'];
        $this->alternatifTable = Alternatif::where('project_id', $problems_id)->get();
        $this->criteriaTable = Criterias::where('alter_id', $alter_id)->get();
        $alternatif = Alternatif::latest()->first();
        $alter_id = $alternatif['id'];
        return view('addproblems', [
            'problemsTable' => $this->problemsTable,
            'alternatifTable'    =>   $this->alternatifTable,
            'criteriaTable'      =>   $this->criteriaTable
        ]);
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nameproblems' => 'required',
        //     'user_id' => Auth::user()->id
        // ]);
        Problems::create([
            'nameproblems' => $request->nameproblems,
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->route('addproblems.index');
    }
}
