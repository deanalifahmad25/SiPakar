<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Aturan;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\UserDiagnosa;

class DashboardController extends Controller
{
    public function index() {
        $user = User::all();
        $aturan = Aturan::all();
        $gejala = Gejala::all();
        $penyakit = Penyakit::all();
        $diagnosa = UserDiagnosa::all();

        return view('admin.dashboard', compact('user', 'aturan', 'gejala', 'penyakit','diagnosa'));
    }
}
