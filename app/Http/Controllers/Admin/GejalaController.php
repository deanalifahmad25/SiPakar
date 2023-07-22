<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gejala;

class GejalaController extends Controller
{
    public function index() {
        $data = Gejala::all();

        return view('gejala.index', compact('data'));
    }

    public function create()
    {
        return view('gejala.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Gejala::create($data);

        return redirect()->route('admin.data-gejala');
    }

    public function edit($id)
    {
        $gejala = Gejala::where('id', $id)->first();

        return view('gejala.edit', compact('gejala'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->except(['_token', '_method']);

        Gejala::where('id', $id)->update($data);

        return redirect()->route('admin.data-gejala');
    }

    public function destroy($id)
    {
        $gejala = Gejala::where('id', $id)->first();

        $gejala->delete();

        return redirect()->route('admin.data-gejala');
    }
}
