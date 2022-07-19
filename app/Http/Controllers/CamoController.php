<?php

namespace App\Http\Controllers;

use App\Models\camuflage;
use Illuminate\Http\Request;

class CamoController extends Controller
{
    public function list() {
        $arCamo = camuflage::all();
        return view('camo.list', compact('arCamo'));
    }
    public function new() {
        return view('camo.new');
    }
    public function item(camuflage $camo) {

        return view('camo.item', compact('camo'));
    }
}
