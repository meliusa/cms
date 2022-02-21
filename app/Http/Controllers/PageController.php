<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Hi! Selamat Datang";
    }

    public function about(){
        $nama = "Meliusa Nora Hariyanti";
        $nim = "2041720084";
        return $nama . " / " . $nim;
    }

    public function articles($id){
        return "Ini adalah halaman Artikel dengan Id: " . $id;
    }
}