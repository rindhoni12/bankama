<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimulasiController extends Controller
{
    public function simulasiKredit()
    {
        return view('fe.simulasi-kredit');
    }

    public function hitungKredit(Request $request)
    {
        // dd($request->all());

        $jumlahKredit = $request->jumlahKredit;
        $jangkaWaktu  = $request->jangkaWaktu;

        $sukubungaPertahun = 2*12;

        // if ($jangkaWaktu == 10){
        //     $sukubungaPertahun = 30;
        // }
        // else if ($jangkaWaktu == 20){
        //     $sukubungaPertahun = 24;
        // }

        $angsuran = [];
        $sukuBunga = $sukubungaPertahun / 100; //utk persen bunga per tahun
        $pokok = $jumlahKredit / $jangkaWaktu; //utk cari nilai pokok
        $bunga = $jumlahKredit * $sukuBunga / $jangkaWaktu; //cari bunga per bulannya
        $sisaPinjaman = $jumlahKredit;
        $jumlahAngsuran = $pokok + $bunga; //angsurannya

        for($i = 0; $i < $jangkaWaktu; $i++) {
            $sisaPinjaman -= $pokok;  //cek sisa pinjaman
            array_push($angsuran, [
                "no"                => $i + 1,
                "pokok"             => round($pokok),
                "bunga"             => round($bunga),
                "jumlahAngsuran"    => round($jumlahAngsuran),
                "sisaPinjaman"      => round($sisaPinjaman)
            ]);
        }
        // return $angsuran;
        
        // $json_response = json_encode($angsuran);
        // echo $json_response;

        $data['angsuran'] = $angsuran;
        $data['jumlahKredit'] = $jumlahKredit;
        $data['jangkaWaktu'] = $jangkaWaktu;
        $data['sukubungaPertahun'] = $sukubungaPertahun/12;
        $data['pokok'] = round($pokok);
        $data['bunga'] = round($bunga);
        $data['jumlahAngsuran'] = round($jumlahAngsuran);
        

        return response()->json($data);
    }

    public function simulasiDeposito()
    {
        return view('fe.simulasi-deposito');
    }

    public function hitungDeposito(Request $request)
    {
        $jumlahKredit = $request->jumlahKredit;
        $jangkaWaktu  = $request->jangkaWaktu;
        $sukubungaPertahun = 2;

        $bunga = $sukubungaPertahun/100 * $jumlahKredit * $jangkaWaktu/365;
        $bungaBersih = $bunga * 80/100;
        $totalPengembalianDeposito = $jumlahKredit + $bungaBersih;

        $data['jumlahKredit'] = $jumlahKredit;
        $data['jangkaWaktu'] = $jangkaWaktu;
        $data['sukubungaPertahun'] = $sukubungaPertahun;
        $data['totalPengembalianDeposito'] = round($totalPengembalianDeposito);
        $data['bungaBersih'] = round($bungaBersih);

        return response()->json($data);
    }
}
