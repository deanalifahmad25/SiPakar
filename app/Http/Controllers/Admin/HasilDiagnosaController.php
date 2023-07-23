<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserDiagnosa;

class HasilDiagnosaController extends Controller
{
    public function index() {
        $data = UserDiagnosa::with(['penyakit', 'user'])->get();

        return view('diagnosa-pengguna.index', compact('data'));
    }
}
