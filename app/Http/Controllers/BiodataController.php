<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\PendidikanTerakhir;
use App\Models\RiwayatPelatihan;
use App\Models\RiwayatPekerjaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biodatas = Biodata::all();
        return view('index-biodata', compact('biodatas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create-biodata');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'kontak' => 'required|string',
            'jenjang_pendidikan' => 'required|string',
            'nama_pelatihan' => 'required|string',
            'perusahaan' => 'required|string',
            'posisi' => 'required|string',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        $user_id = Auth::user()->id;

        // Simpan biodata
        $biodata = new Biodata();
        $biodata->nama = $request->nama;
        $biodata->alamat = $request->alamat;
        $biodata->kontak = $request->kontak;
        $biodata->user_id = $user_id;
        $biodata->email = $request->email;
        $biodata->save();

        // Simpan riwayat pendidikan terakhir
        $pendidikan = new PendidikanTerakhir();
        $pendidikan->biodata_id = $biodata->id;
        $pendidikan->jenjang_pendidikan = $request->jenjang_pendidikan;
        $pendidikan->nama_sekolah = $request->nama_sekolah;
        $pendidikan->jurusan = $request->jurusan;
        $pendidikan->tahun_lulus = $request->tahun_lulus;
        // tambahkan data lainnya untuk riwayat pendidikan terakhir
        $pendidikan->save();

        // Simpan riwayat pelatihan
        $pelatihan = new RiwayatPelatihan();
        $pelatihan->biodata_id = $biodata->id;
        $pelatihan->nama_pelatihan = $request->nama_pelatihan;
        $pelatihan->institusi = $request->institusi;
        $pelatihan->tanggal_mulai = $request->tanggal_mulai;
        $pelatihan->tanggal_selesai = $request->tanggal_selesai;
        // tambahkan data lainnya untuk riwayat pelatihan
        $pelatihan->save();

        // Simpan riwayat pekerjaan
        $pekerjaan = new RiwayatPekerjaan();
        $pekerjaan->biodata_id = $biodata->id;
        $pekerjaan->perusahaan = $request->perusahaan;
        $pekerjaan->posisi = $request->posisi;
        $pekerjaan->tanggal_mulai = $request->tanggal_mulai;
        $pekerjaan->tanggal_selesai = $request->tanggal_selesai;
        // tambahkan data lainnya untuk riwayat pekerjaan
        $pekerjaan->save();

        return redirect()->route('biodata.index')->with('success', 'Biodata berhasil disimpan!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Biodata $biodata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Biodata $biodata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Biodata $biodata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Biodata $biodata)
    {
        //
    }
}
