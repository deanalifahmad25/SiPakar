<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gejala;

class GejalaController extends Controller
{
    public function gejala() {
        $data = Gejala::all();

        return view('admin.data-gejala', compact('data'));
    }


}
