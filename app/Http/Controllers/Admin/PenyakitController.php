<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penyakit;

class PenyakitController extends Controller
{
    public function penyakit() {
        $data = Penyakit::all();

        return view('admin.data-penyakit', compact('data'));
    }

    
}
