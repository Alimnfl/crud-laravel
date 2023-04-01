@extends('layouts.index')

@section('content')
    <br/>
    <form method="POST" action="{{ url('pegawai/'.$model->id) }}">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        Nama : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="nama" value="{{ $model->nama }}"><br/>
        Tanggal Lahir : <input type="text" name="tanggal_lahir" value="{{ $model->tanggal_lahir }}"><br/>
        Gelar : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="gelar" value="{{ $model->gelar }}"><br/>
        NIP : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="nip" value="{{ $model->nip }}"><br/>

        <br/>
        <button class="btn btn-dark" type="submit">Simpan</button>
    </form>
@endsection