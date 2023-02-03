@extends('layouts.main')
@section('container')
<div class="row justify-content-center mt-5">
    <div class="p-3 btn btn-outline-info text-light col-md-5 border-0">
        <main class="form-registration">
            <h1 class="h3 fw-normal text-center text-dark">DATA PEGAWAI</h1>
            <form action="{{ url('pegawai/'.$pgw->id) }}" method="post" class="">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-floating">
                    <label for="nip">nip </label>
                    <input type="text" class="form-control" name="nip" placeholder="nip" value="{{ $pgw->nip }}" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="nama"> nama </label>
                    <input type="text" class="form-control " name="nama" placeholder="nama" value="{{ $pgw->nama }}" autocomplete="off">
                </div>
                
                <div class="form-floating">
                    <label for="jenis kelamin">jenis kelamin</label>
                     <select id="jenis kelamin" name="jenis_id" class="form-control">
                        <option value="1">perempuan</option> 
                        <option value="2">laki-laki</option>
                       
                    </select>
                </div>
                <div class="form-floating">
                    <label for="status">status</label>
                     <select id="status" name="status_id" class="form-control">
                        <option value="1">belum menikah</option> 
                        <option value="2">menikah</option>
                       
                    </select>
                </div>
                <div class="form-floating">
                    <label for="agama">agama</label>
                    <input type="text" class="form-control" name="agama" placeholder="agama" value="{{ $pgw->agama }}" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="tempat lahir">tempat lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="tempat lahir" value="{{ $pgw->tempat_lahir }}" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="tanggal lahir">tanggal lahir</label>
                    <input type="text" class="form-control" name="tanggal_lahir" placeholder="tanggal lahir" value="{{ $pgw->tanggal_lahir }}" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="alamat">alamat </label>
                    <input type="text" class="form-control" name="alamat" placeholder="alamat" value="{{ $pgw->alamat }}" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="telepon">telepon </label>
                    <input type="text" class="form-control" name="telepon" placeholder="telepon" value="{{ $pgw->telepon }}" autocomplete="off">
                </div>
                <button class="w-50 btn btn-outline-success text-dark mt-3" type="submit">kirim</button>
            </form>
        
        </main>
    </div>
</div>
@endsection

