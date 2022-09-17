<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    public function index()
    {
        $pengaduans = Pengaduan::orderBy('status')->latest()->get();
        return view('be.pengaduan.index', compact('pengaduans'));
    }

    public function show(Pengaduan $pengaduan)
    {
        return view('be.pengaduan.show', compact('pengaduan'));
    }

    public function status(Pengaduan $pengaduan)
    {
        $aduan = Pengaduan::findOrFail($pengaduan->id);
        if ($aduan->status == 0) {
            $aduan->status = '1';
            $aduan->save();
        } else {
            $aduan->status = '0';
            $aduan->save();
        }
        // $pengaduans = Pengaduan::orderBy('status')->latest()->get();
        // return view('be.pengaduan.index', compact('pengaduans'));
        // return $this->index();
        return redirect(route('pengaduan.index'))->with('info', 'Data berhasil diubah!');
    }
}
