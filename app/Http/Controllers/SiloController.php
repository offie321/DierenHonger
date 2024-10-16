<?php

namespace App\Http\Controllers;

use App\Models\SiloWeight;
use Illuminate\Http\Request;

class SiloController extends Controller
{
    //
    public function showSiloWeight(){
        $siloWeight = SiloWeight::latest()->first();
        $bijnaLeeg = 1.0;
        $isBijnaLeeg = $siloWeight && $siloWeight->current_weight < $bijnaLeeg;
        return view('feed_schedule.silo_weight', compact('siloWeight', 'bijnaLeeg'));
    }
}
