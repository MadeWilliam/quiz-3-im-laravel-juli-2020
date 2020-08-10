<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ProyekController extends Controller
{

    public function create()
    {
        return view('proyek.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'title' => 'required|unique:proyek',
            'content' => 'required'
        ]);


        $query = DB::table('proyek')->insert(
            ['title' => $request["title"], 'content' => $request["content"]]
        );


        return redirect('proyek')
            ->with('success', 'proyek berhasil disimpan');
    }

    public function index()
    {
        $proyek = DB::table('proyek')->get();
        // dd($proyek);
        return view('proyek.index', compact('proyek'));
    }

    public function show($id)
    {
        $proyek = DB::table('proyek')->where('id', $id)->first();
        // dd($proyek);
        return view('proyek.show', compact('proyek'));
    }

    public function edit($id)
    {
        $proyek = DB::table('proyek')->where('id', $id)->first();
        // dd($proyek);
        return view('proyek.edit', compact('proyek'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required|unique:proyek',
            'content' => 'required'
        ]);

        $query = DB::table('proyek')
            ->where('id', $id)
            ->update([
                'title' => $request['title'],
                'content' => $request['content']
            ]);
        // dd($proyek);
        return redirect('proyek')
            ->with('success', 'proyek berhasil diupdate');
    }

    public function destroy($id)
    {
        $query = DB::table('proyek')
            ->where('id', $id)
            ->delete();
        // dd($proyek);

        return redirect('proyek')
            ->with('success', 'proyek berhasil dihapus');
    }
}
