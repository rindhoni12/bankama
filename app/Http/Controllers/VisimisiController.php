<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visimisi;

class VisimisiController extends Controller
{
    public function index()
    {
        $visimisis = Visimisi::latest()->get();
        return view('be.visimisi.index', compact('visimisis'));
    }

    public function create()
    {
        return view('be.visimisi.create');
    }

    public function store()
    {
        $visimisis = request()->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);

        Visimisi::create($visimisis);
        return redirect(route('visimisi.index'))->with('success', 'Data berhasil disimpan!');
    }

    public function edit(Visimisi $visimisi)
    {
        return view('be.visimisi.edit', compact('visimisi'));
    }

    public function update(Visimisi $visimisi)
    {
        $visimisis = request()->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $visimisi->update($visimisis);
        return redirect(route('visimisi.index'))->with('info', 'Data berhasil diubah!');
    }
}
