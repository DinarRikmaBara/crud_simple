<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Kelas;
use App\Models\Angkatan;
use App\Models\Prodi;
use Illuminate\Support\Facades\DB;

class AuthConroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Mahasiswa::
                join('kelas','mahasiswa.idK','kelas.idK')
                ->join('prodi','mahasiswa.idP','prodi.idP')
                ->join('angkatan','mahasiswa.idA','angkatan.idA')
                ->select('*')
                ->get();
        return view('crud.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        $prodi = Prodi::all();
        $angkatan = angkatan::all();
        
        return view('crud.create',compact('kelas','prodi','angkatan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'idP'=>'required',
            'idK'=>'required',
            'idA'=>'required',
        ]);
        $data = $request->all();

        Mahasiswa::create($data);

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $data = $request->validate([
            'cari'=>'required'
        ]);
        $cari = Mahasiswa::where('nama','like','%'.$data['cari'].'%')
        ->join('kelas','mahasiswa.idK','kelas.idK')
        ->join('prodi','mahasiswa.idP','prodi.idP')
        ->join('angkatan','mahasiswa.idA','angkatan.idA')
        ->select('*')
        ->get();
        return view('crud.cari',compact('cari'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Mahasiswa::where('idM',$id)
                ->join('kelas','mahasiswa.idK','kelas.idK')
                ->join('prodi','mahasiswa.idP','prodi.idP')
                ->join('angkatan','mahasiswa.idA','angkatan.idA')
                ->select('*')
                ->get();
                $kelas = Kelas::all();
                $prodi = Prodi::all();
                $angkatan = angkatan::all();

        return view('crud.edit',compact('data','kelas','prodi','angkatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nama'=>'required',
            'idP'=>'required',
            'idK'=>'required',
            'idA'=>'required',
        ]);

        mahasiswa::where('idM',$id)->update($data);

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        mahasiswa::where('idM',$id)->delete();

        return redirect()->route('index');
    }
}
