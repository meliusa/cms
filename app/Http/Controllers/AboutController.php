<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $nama = "Meliusa Nora Hariyanti";
        $nim = "2041720084";
        return $nama . " / " . $nim;
    }
}
