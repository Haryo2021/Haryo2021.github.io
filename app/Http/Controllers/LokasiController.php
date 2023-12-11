<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LokasiModel;

class LokasiController extends Controller
{
    public function __construct()
    {
        $this -> LokasiModel = new LokasiModel();
    }


    public function index() {
        return view('home');
    }

    public function Lokasi() {
        $results = $this -> LokasiModel -> allData();
        return json_encode($results);
    }
}
