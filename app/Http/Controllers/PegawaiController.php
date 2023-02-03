<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pgw = pegawai::all();
        return view('data.pegawai.index', compact('pgw'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pgw = new pegawai;
        return view('data.pegawai.create', compact('pgw'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pgw = new pegawai;
        $pgw->nip = $request->nip;
        $pgw->nama = $request->nama;
        $pgw->agama = $request->agama;
        $pgw->tempat_lahir = $request->tempat_lahir;
        $pgw->tanggal_lahir = $request->tanggal_lahir;
        $pgw->alamat = $request->alamat;
        $pgw->telepon = $request->telepon;
        $pgw->jenis_id = $request->jenis_id;
        $pgw->status_id = $request->status_id;
        $pgw->save();

        return redirect('pegawai');
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
        $pgw = pegawai::find($id);
        return view('data.pegawai.edit', compact('pgw'));
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
        $pgw = pegawai::find($id);
        $pgw->nip = $request->nip;
        $pgw->nama = $request->nama;
        $pgw->agama = $request->agama;
        $pgw->tempat_lahir = $request->tempat_lahir;
        $pgw->tanggal_lahir = $request->tanggal_lahir;
        $pgw->alamat = $request->alamat;
        $pgw->telepon = $request->telepon;
        $pgw->jenis_id = $request->jenis_id;
        $pgw->status_id = $request->status_id;
        $pgw->save();

        return redirect('pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pgw = pegawai::find($id);
        $pgw->delete();
        return redirect('pegawai');
    }
}
