<?php

namespace App\Http\Controllers;

use App\Models\reservasi;
use Illuminate\Http\Request;

class reservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservasi = reservasi::all();
        return view('reservasi.index', ['reservasi' => $reservasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservasi.create');
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
            'kamar_id' => 'required',
            'checkin' => 'required',
            'checkout' => 'required',
            'total' => 'required',
            'status' => 'required',
        ]);
        reservasi::create($request->all());
        return redirect()->route('reservasi.index')->with('success', 'Reservasi Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservasi = reservasi::find($id);
        return view('reservasi.edit', compact('reservasi'));
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
            'kamar_id' => 'required',
            'checkin' => 'required',
            'checkout' => 'required',
            'total' => 'required',
            'status' => 'required',
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        reservasi::find($id)->update($request->all());
        return redirect()->route('reservasi.index')->with('success', 'Reservasi Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        reservasi::find($id)->delete();
        return redirect()->route('reservasi.index')->with('success', 'Reservasi Berhasil Dihapus');
    }
}
