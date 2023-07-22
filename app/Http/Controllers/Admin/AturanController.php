<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aturan;
use App\Models\Keputusan;
use App\Models\Penyakit;

class AturanController extends Controller
{
    public function index() {
        $data = Aturan::all();

        return view('aturan.index', compact('data'));
    }

    public function create()
    {
        $keputusan = Keputusan::all();
        $penyakit = Penyakit::all();

        return view('aturan.create', compact('keputusan', 'penyakit'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Aturan::create($data);

        return redirect()->route('admin.aturan');
    }

    public function edit($id)
    {
        $aturan = Aturan::where('id', $id)->first();

        return view('aturan.edit', compact('aturan'), ['keputusan' => Keputusan::get('kode_keputusan'),
        'penyakit' => Penyakit::get('nama_penyakit')]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except(['_token', '_method']);

        Aturan::where('id', $id)->update($data);

        return redirect()->route('admin.aturan');
    }

    public function destroy($id)
    {
        $aturan = Aturan::where('id', $id)->first();

        $aturan->delete();

        return redirect()->route('admin.aturan');
    }
}
