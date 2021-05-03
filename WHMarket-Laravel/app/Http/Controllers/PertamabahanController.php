<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertamabahanController extends Controller
{
    public function pertambahan ($data1, $data2) {
        return $data1 + $data2;

    }


}