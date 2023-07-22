<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penyakit;

class PenyakitController extends Controller
{
    public function index() {
        $data = Penyakit::all();

        return view('penyakit.index', compact('data'));
    }

    public function create()
    {
        return view('penyakit.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Penyakit::create($data);

        return redirect()->route('admin.data-penyakit');
    }

    public function edit($id)
    {
        $penyakit = Penyakit::where('id', $id)->first();

        return view('penyakit.edit', compact('penyakit'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->except(['_token', '_method']);

        Penyakit::where('id', $id)->update($data);

        return redirect()->route('admin.data-penyakit');
    }

    public function destroy($id)
    {
        $penyakit = Penyakit::where('id', $id)->first();

        $penyakit->delete();

        return redirect()->route('admin.data-penyakit');
    }
}
