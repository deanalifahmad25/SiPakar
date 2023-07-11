<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aturan;

class AturanController extends Controller
{
    public function aturan() {
        $data = Aturan::all();

        return view('admin.aturan', compact('data'));
    }


}
