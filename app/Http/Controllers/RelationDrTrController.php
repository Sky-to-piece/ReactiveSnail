<?php

namespace App\Http\Controllers;

use App\Models\RelationDrTr;

class RelationDrTrController extends Controller
{
    public function index(){
        $relations = RelationDrTr::all();
        return view('relation', compact('relations'));
    }
}
