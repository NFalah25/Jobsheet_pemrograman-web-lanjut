<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;
use App\Models\kelas;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $keyword = $request->input('nama');

        if ($keyword) {
            $mahasiswa = Mahasiswa::with('kelas')->where('nama', 'like', '%' . $keyword . '%')->paginate(5);
        } else {
            $mahasiswa = Mahasiswa::with('kelas')->paginate(5);
        }

        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = kelas::all(); //mendapatkan data dari table kelas
        return view('mahasiswa.create', ['kelas' => $kelas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        Melakukan Validasi Data
        $request->validate([
            'Nim'=>'required',
            'nama'=>'required',
            'kelas'=>'required',
            'jurusan'=>'required',
            'no_handphone'=>'required',
            'email'=> 'required',
            'tanggal_lahir'=> 'required',
        ]);

        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = $request->get('Nim');
        $mahasiswa->nama = $request->get('nama');
        $mahasiswa->jurusan = $request->get('jurusan');
        $mahasiswa->no_handphone = $request->get('no_handphone');
        $mahasiswa->email = $request->get('email');
        $mahasiswa->tanggal_lahir = $request->get('tanggal_lahir');
        $mahasiswa->save();

        $kelas = new kelas;
        $kelas->id = $request->get('kelas');

        // fungsi eloquent untuk mengupdate data dengan relasi belongsTo
        $mahasiswa->kelas()->associate($kelas);
        $mahasiswa->save();

        // jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('mahasiswa.index')->with('success','Mahasiswa Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show($Nim)
    {
        //Menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $mahasiswa = Mahasiswa::with('kelas')->where('Nim',$Nim)->first();
        return view('mahasiswa.detail', ['Mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($nim)
    {
        //menampilkan detail data dengan menemukan/berdasarkan nim Mahasiswa
        $mahasiswa = Mahasiswa::with('kelas')->where('Nim', $nim)->first();
        $kelas = kelas::all(); //mendapatkan data dari table kelas
        return view('mahasiswa.edit', compact('mahasiswa', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $nim)
    {
        $request->validate([
            'Nim'=>'required',
            'nama'=>'required',
            'kelas'=>'required',
            'jurusan'=>'required',
            'no_handphone'=>'required',
            'email'=> 'required',
            'tanggal_lahir'=> 'required'
        ]);

        // Mahasiswa::find($nim)->update($request->all());
        $mahasiswa = Mahasiswa::with('kelas')->where('Nim', $nim) -> first();
        $mahasiswa->Nim = $request->get('Nim');
        $mahasiswa->nama = $request->get('nama');
        $mahasiswa->kelas_id = $request->get('kelas');
        $mahasiswa->jurusan = $request->get('jurusan');
        $mahasiswa->no_handphone = $request->get('no_handphone');
        $mahasiswa->email = $request->get('email');
        $mahasiswa->tanggal_lahir = $request->get('tanggal_lahir');
        $mahasiswa->save();

        $kelas = new kelas;
        $kelas->id = $request->get('kelas');

        //fungsi elequent untuk mengupdate data dengan relasi belongsTo
        $mahasiswa->kelas()->associate($kelas);
        $mahasiswa->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Mahasiswa Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nim)
    {
        //fungsi eloquent untuk menghapus data
        Mahasiswa::find($nim)->delete();
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Mahasiswa Berhasil Dihapus');
    }
}
