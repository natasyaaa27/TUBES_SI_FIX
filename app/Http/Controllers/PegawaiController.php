<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use App\Models\pengguna;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = pegawai::join('pengguna', 'pengguna.id_pengguna', 'pegawai.id_pengguna')
            ->select('pegawai.*', 'pengguna.*')
            ->paginate(10);
        return view('pegawai/pegawai', compact('pegawai'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['pengguna'] = pengguna::all();
        return view('pegawai/tambah-pegawai', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_pengguna' => 'required',
            'nama' => 'required',
            'usia' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        pegawai::create([
            'id_pegawai' => rand(),
            'id_pengguna'  => $request->id_pengguna,
            'nama'  => $request->nama,
            'usia' => $request->usia,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
        return redirect("pegawai")->with("message", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pegawai $pegawai)
    {
        $data['pengguna'] = pengguna::all();
        return view('pegawai/edit-pegawai', compact('pegawai'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pegawai $pegawai)
    {
        $request->validate([
            'nama' => 'required',
            'usia' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $pegawai->update([
            'id_pegawai' => rand(),
            'id_pengguna' => $request->id_pengguna,
            'nama'  => $request->nama,
            'usia' => $request->usia,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
        return redirect("pegawai")->with("message", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect("pegawai");
    }

    public function print()
    {
        $pegawai = pegawai::all();
        $pdf = Pdf::loadview('pegawai/laporan-pegawai', ['pegawai' => $pegawai])->setPaper('a4', 'landscape');
        return $pdf->download('laporan-pegawai.pdf');
    }
}
