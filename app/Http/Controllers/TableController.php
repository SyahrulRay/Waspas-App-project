<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function create(): View
    {
        return view('process.table');
    }
}
