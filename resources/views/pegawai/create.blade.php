@extends('layouts.index')

@section('content')
    <br/>
    <form class="container " method="POST" action="{{ url('pegawai') }}">
        @csrf
        Nama  : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="nama"><br/>
        Tanggal Lahir : <input type="text" name="tanggal_lahir"><br/>
        Gelar : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="gelar"><br/>
        NIP : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="nip"><br/>

        <br/>
        <button class="btn btn-dark" type="submit">Simpan</button>
    </form>
@endsection