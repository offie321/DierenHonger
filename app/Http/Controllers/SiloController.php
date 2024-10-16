<?php

namespace App\Http\Controllers;

use App\Models\SiloWeight;
use Illuminate\Http\Request;

class SiloController extends Controller
{
    //
    public function showSiloWeight(){
        $siloWeight = SiloWeight::latest()->first();
        $bijnaLeeg = 20.0;
        $isBijnaLeeg = $siloWeight && $siloWeight->weight < $bijnaLeeg;
        return view('feed_schedule.silo_weight', compact('siloWeight', 'isBijnaLeeg'));
    }

    public function updateWeight($weight){
        if (!is_numeric($weight)){
            return response()->json(['message' => 'Invalid weight'], 400);
        }
        SiloWeight::create(['weight' => (float)$weight]);

        return response()->json(['message' => 'Weight stored succesfully', 'weight' => $weight]);
    }
}
