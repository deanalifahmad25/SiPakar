<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDiagnosa;
use Auth;

class DashboardController extends Controller
{
    public function index() {
        $userId = Auth::user()->id;
        $data = UserDiagnosa::with(['penyakit', 'user'])->where('created_by', $userId)->get();

        return view('user.dashboard', compact('data'));
    }
}
