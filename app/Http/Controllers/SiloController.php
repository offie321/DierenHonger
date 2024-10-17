<?php

namespace App\Http\Controllers;

use App\Models\SiloWeight;
use Illuminate\Http\Request;

class SiloController extends Controller
{

    public function updateWeight($weight){
        if (!is_numeric($weight)){
            return response()->json(['message' => 'Invalid weight'], 400);
        }
        SiloWeight::create(['weight' => (float)$weight]);

        return response()->json(['message' => 'Weight stored succesfully', 'weight' => $weight]);
    }
}
