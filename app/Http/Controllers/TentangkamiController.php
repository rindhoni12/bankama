<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentangkami;

class TentangkamiController extends Controller
{
    public function index()
    {
        $tentangkamis = Tentangkami::get();
        return view('be.tentang-kami.tentangkami.index', compact('tentangkamis'));
    }

    public function create()
    {
        return view('be.tentang-kami.tentangkami.create');
    }

    public function store()
    {
        $tentangkamis = request()->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        Tentangkami::create($tentangkamis);
        return redirect(route('tentangkami.index'))->with('success', 'Data berhasil disimpan!');
    }

    public function edit(Tentangkami $tentangkami)
    {
        return view('be.tentang-kami.tentangkami.edit', compact('tentangkami'));
    }

    public function update(Tentangkami $tentangkami)
    {
        $tentangkamis = request()->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $tentangkami->update($tentangkamis);
        return redirect(route('tentangkami.index'))->with('info', 'Data berhasil diubah!');
    }
}
