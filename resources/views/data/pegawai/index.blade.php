
@extends('layouts.main')
@section('container')

<div class="row justify-content-center mt-4">
    <font face="Verdana" size="6">
        <b><i>DATA PEGAWAI DEWAN PERWAKILAN RAKYAT DAERAH</i></b> 
    </font>
</div>

<table align="center" class="table mt-5">
<tr align="center">
    <th>NIP</th>
    <th>Nama</th>
    <th>Jenis kelamin</th>
    <th>Status</th>
    <th>Agama</th>
    <th>Tempat lahir</th>
    <th>Tanggal lahir</th>
    <th>Alamat</th>
    <th>telepon</th>
    <th colspan="2">Aksi</th>
</tr>
@foreach ($pgw as $key=>$value)

<tr align="center">
<td>{{ $value->nip }}</td>
<td>{{ $value->nama }}</td>
<td>{{ $value->jenis->name }}</td>
<td>{{ $value->status->name }}</td>
<td>{{ $value->agama }}</td>
<td>{{ $value->tempat_lahir }}</td>
<td>{{ $value->tanggal_lahir }}</td>
<td>{{ $value->alamat }}</td>
<td>{{ $value->telepon }}</td>
<td><a href="{{ url('pegawai/'.$value->id.'/edit') }}" class="text-dark btn btn-outline-info btn-success">Upgrade</a></td>
<td>
    <form action="{{ url('pegawai/'.$value->id) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button class="text-dark btn btn-outline-info btn-danger" type="submit">Delete</button>
    </form>
</td>
</tr>

@endforeach
</table>
<div class="row justify-content-center mt-5">
    <a href="pegawai/create" class="w-25 btn btn-outline-info btn-info text-dark">Tambah Pegawai</a>
 </div>
    
@endsection

    

    


