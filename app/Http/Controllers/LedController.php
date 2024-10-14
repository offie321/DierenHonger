<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Count;
use App\Models\Led;

class LedController extends Controller
{
    //
    function index() {
        $count = Count::first();
        $led = Led::first();
        return view('home')->with('count', $count)->with('led', $led);
    }

    public function toggle_led() {
        $led = Led::first();


        if($led->led_is_on == 1) {
            $led->led_is_on = 0;
        } else {
            $led->led_is_on = 1;
        }

        $led->save();

        return redirect('/');
    }

    public function get_led_state() {
        return Led::first()->led_is_on;
    }
}