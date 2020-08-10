<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = DB::table('karyawan')->get();
        // dd($karyawan);
        return view('karyawan.index', compact('karyawan'));
    }

    public function proyek($id)
    {
        $ky_proyek = DB::table('proyek')->where('id', $id)->first();
        // dd($proyek);
        return view('karyawan.show', compact('ky_proyek'));    }
}
