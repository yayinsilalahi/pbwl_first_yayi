<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Halaman Mahasiswa
        $mahasiswa = mahasiswa::orderBy('npm', 'asc')->get();
        $no =1;
        return view('Mahasiswa.index', compact('mahasiswa', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Halaman Create Mahasiswa
        return view('Mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Halaman Simpan Tambah Mahasiswa

        Session::flash('npm', $request->npm);
        Session::flash('nama_mahasiswa', $request->nama_mahasiswa);
        Session::flash('tgl_lahir', $request->tgl_lahir);
        Session::flash('alamat', $request->alamat);

$request->validate([
    'npm' => 'required|numeric|unique:mahasiswa,npm',
    'nama_mahasiswa' => 'required|string',
    'jk' => 'required',
    'tgl_lahir' => 'required',
    'alamat' => 'required'
],
[
    'npm.required' => 'NPM tidak boleh kosong!',
    'npm.numeric' => 'NPM harus diisi dengan angka',
    'npm.unique' => 'NPM sudah ada sebelumnya',
    'nama_mahasiswa.required' => 'Nama tidak boleh kosong!',
    'jk.required' => 'Jenis Kelamin tidak boleh kosong!',
    'tgl_lahir.required' => 'Tanggal Lahir tidak boleh kosong!',
    'alamat.required' => 'Alamat tidak boleh kosong!'
]
);

        $data = [
            'npm' => $request->npm,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat
        ];
        Mahasiswa::create($data);
        return redirect('/mahasiswa')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Halaman Detail Mahasiswa
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Halaman Edit Mahasiswa
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Halaman Update Mahasiswa
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Halaman Hapus Mahasiswa
    }
}
