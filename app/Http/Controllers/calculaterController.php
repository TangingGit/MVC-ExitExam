<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
class calculaterController extends Controller
{
    public function sum(){
        $a = Input::get('a');
        $b = Input::get('b');
        echo $a+$b;
    }
}
