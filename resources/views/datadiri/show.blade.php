@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
            <div class="card">
                <div class="card-header">
                    <h2>Data Pelamar</h2>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif


                        <div class="row">
                            <div class="col-md-4">
                                <table class="table table-bordered">

                                    <tr>
                                        <td ><strong>Nama :</strong></td>
                                        <td>{{ $users->name }}</td>
                                    </tr>
                                    <tr>
                                        <td ><strong>Email :</strong></td>
                                        <td>{{ $users->email }}</td>
                                    </tr>
                                    <tr>
                                        <td ><strong>Lowongan :</strong></td>
                                        <td>{{ $users->lowongan }}</td>
                                    </tr>
                                    <tr>
                                        <td ><strong>Tindakan :</strong></td>
                                        <td>
                                        <a class="btn btn-warning" href="{{route('datadiri.edit',$users->id)}}">Edit Data Diri</a>
                                        </td>
                                    </tr>

                                </table>
                            </div>

                            <div class="col-md-4">
                                <table class="table ">
                                    <tr>
                                        <td ><strong>Foto :</strong></td>
                                        <td><img src="{{ asset('img/foto/' . $users->datadiri->foto) }}" width="80px" height="80px" alt="Image">
                                            </td>
                                    </tr>
                                    <tr>
                                        <td ><strong>Nama Lengkap :</strong></td>
                                        <td>{{ $users->datadiri->nama }}</td>
                                    </tr>
                                    <tr>
                                        <td ><strong>Kota Kelahiran :</strong></td>
                                        <td>{{ $users->datadiri->asal }}</td>
                                    </tr>
                                    <tr>
                                        <td ><strong>Tanggal Lahir :</strong></td>
                                        <td>{{ $users->datadiri->tanggal_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <td ><strong>Status :</strong></td>
                                        <td>{{ $users->datadiri->status }}</td>
                                    </tr>
                                    <tr>
                                        <td ><strong>Alamat (Jalan) :</strong></td>
                                        <td>{{ $users->datadiri->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <td ><strong>Kota :</strong></td>
                                        <td>{{ $users->datadiri->kota_alamat }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <table class="table">
                                    <tr>
                                        <td ><strong>Tahun Lulus :</strong></td>
                                        <td>{{ $users->datadiri->tahun_lulus }}</td>
                                    </tr>
                                    <tr>
                                        <td ><strong>Insitusi/Lembaga :</strong></td>
                                        <td>{{ $users->datadiri->pendidikan }}</td>
                                    </tr>
                                    <tr>
                                        <td ><strong>Jurusan :</strong></td>
                                        <td>{{ $users->datadiri->jurusan }}</td>
                                    </tr>
                                    <tr>
                                        <td ><strong>No. Hp :</strong></td>
                                        <td>{{ $users->datadiri->hp }}</td>
                                    </tr>
                                    <tr>
                                        <td ><strong>Pengalaman Kerja (Tahun) :</strong></td>
                                        <td>{{ $users->datadiri->tahun_pengalaman }}</td>
                                    </tr>
                                    <tr>
                                        <td ><strong>Jabatan :</strong></td>
                                        <td>{{ $users->datadiri->pekerjaan }}</td>
                                    </tr>
                                    <tr>
                                        <td ><strong>Resume :</strong></td>
                                        <td><a href="{{asset('pdf/',$users->datadiri->file_resume )}}">{{$users->datadiri->file_resume}}</a>
                                            </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
