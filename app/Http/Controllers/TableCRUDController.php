<?php

namespace App\Http\Controllers;

use App\Models\fasilitas;
use Fasilitas as GlobalFasilitas;
use Illuminate\Http\Request;

class TableCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitas = fasilitas::all(); // Mengambil semua isi tabel
        $posts = fasilitas::orderBy('nama', 'desc')->paginate(10);
        return view('table-fasilitas', compact('fasilitas'));
        // with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fasilitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);
        fasilitas::create($request->all());
        return redirect()->route('fasilitas')->with('success', 'Fasilitas Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $fasilitas = fasilitas::find($id);
        // return view('fdetail', compact('Mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitas = fasilitas::find($id);
        return view('fasilitas.edit', compact('fasilitas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        fasilitas::find($id)->update($request->all());
        return redirect()->route('fasilitas')->with('success', 'Fasilitas Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        fasilitas::find($id)->delete();
        return redirect()->route('fasilitas')->with('success', 'Fasilitas Berhasil Dihapus');
    }
}
