<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LokasiModel extends Model
{
    public function allData(){
        $results = DB::table('tabel_titik')
            ->select('nama', 'latitude', 'longitude')
            ->get();
            return $results;
    }
}
