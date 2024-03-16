<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = DB::table('siswa')
            ->join('jurusan', 'siswa.id_jurusan', '=', 'jurusan.id_jurusan')
            ->select('siswa.*', 'jurusan.nama_jurusan')
            ->get();
        return view('siswa.index');
    }

    public function create()
    {
        
        
        return view('siswa.create', ['jurusans' => $jurusans]);
    }

    public function store(Request $request)
    {
        $siswa = new Siswa();
        $siswa->nisn = $request->nisn;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->alamat = $request->alamat;
        $siswa->id_jurusan = $request->id_jurusan;
        $siswa->save();

        return redirect()->route('siswa.index');
    }




}
