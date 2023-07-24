<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDiagnosa;

class DetailDiagnosaController extends Controller
{
    public function index($id) {
        $data = UserDiagnosa::where('id', $id)->with(['penyakit', 'user'])->first();

        return view('user.invoice-diagnosa', compact('data'));
    }
}
