<?php

namespace App\Http\Controllers;

use App\Models\TempatPkl;
use Illuminate\Http\Request;

class TempatPklController extends Controller
{
    public function index()
    {
        $tempatPkls = TempatPkl::all();

        return view('admin.tempat-pkl.index', compact('tempatPkls'));
    }

    public function create()
    {
        return view('admin.tempat-pkl.create');
    }

    public function store(Request $request)
    {
        TempatPkl::create($request->all());

        return redirect('/tempat-pkl');
    }

    public function edit($id)
    {
        $tempatPkl = TempatPkl::findOrFail($id);

        return view('admin.tempat-pkl.edit', compact('tempatPkl'));
    }

    public function update(Request $request, $id)
    {
        $tempatPkl = TempatPkl::findOrFail($id);

        $tempatPkl->update($request->all());

        return redirect('/tempat-pkl');
    }

    public function destroy($id)
    {
        $tempatPkl = TempatPkl::findOrFail($id);

        $tempatPkl->delete();

        return redirect('/tempat-pkl');
    }
}