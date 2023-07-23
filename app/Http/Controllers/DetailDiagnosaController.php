<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDiagnosa;
use PDF;

class DetailDiagnosaController extends Controller
{
    public function index($id) {
        $data = UserDiagnosa::where('id', $id)->with(['penyakit', 'user'])->first();

        return view('user.invoice-diagnosa', compact('data'));
    }

    public function print($data) {
        $pdf = PDF::loadView('user.invoice-diagnosa', [$data]);
        $fileName = Auth::user()->name . '_hasil_diagnosa.pdf';

        return $pdf->download($fileName);
    }
}
