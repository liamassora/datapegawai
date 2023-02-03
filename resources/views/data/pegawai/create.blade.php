@extends('layouts.main')
@section('container')
<div class="row justify-content-center mt-5">
    <div class="p-3 btn btn-outline-info text-light col-md-5 border-0">
        <main class="form-registration">
            <h1 class="h3 fw-normal text-center text-dark">data pegawai</h1>
            <form action="{{ url('pegawai') }}" method="post" class="">
                @csrf
                <div class="form-floating">
                    <label for="nip">nip</label>
                    <input type="text" class="form-control" name="nip" placeholder="nip" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="Email"> nama </label>
                    <input type="text" class="form-control" name="nama" placeholder="nama" autocomplete="off">
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
                    <label for="Email"> agama </label>
                    <input type="text" class="form-control " name="agama" placeholder="agama" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="text"> tempat lahir </label>
                    <input type="text" class="form-control " name="tempat_lahir" placeholder="tempat_lahir" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="text"> tanggal lahir </label>
                    <input type="text" class="form-control " name="tanggal_lahir" placeholder="tanggal_lahir" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="text"> alamat </label>
                    <input type="text" class="form-control " name="alamat" placeholder="alamat" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="text"> telepon </label>
                    <input type="text" class="form-control " name="telepon" placeholder="telepon" autocomplete="off">
                </div>
              
                <button class="w-50 btn btn-outline-success text-dark mt-3" type="submit">kirim</button>
            </form>
        
        </main>
    </div>
</div>
@endsection

