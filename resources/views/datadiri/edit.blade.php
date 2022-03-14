@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Diri Pelamar</div>

                <div class="card-body">
                    <form action="{{route('datadiri.update',$users->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">Nama Lengkap</label>
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{$users->datadiri->nama}}" required>
                            </div>
                        </div>
                        {{--
                        <div class="form-group row">
                            <label for="foto" class="col-md-4 col-form-label text-md-right">Foto</label>
                            <div class="col-md-6">
                                <input id="foto" type="text" class="form-control" name="foto" value="{{ old('foto') }}" required>
                            </div>
                        </div>--}}

                        <div class="form-group row">
                            <label for="foto" class="col-md-4 col-form-label text-md-right">File Foto</label>

                            <div class="col-md-6">
                                <div class="custom-file">
                                    <input id="foto" type="file" name="foto" class="custom-file-input" value="{{$users->datadiri->foto}}">
                                    <label class="custom-file-label">Pilih file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="asal" class="col-md-4 col-form-label text-md-right">Tempat Lahir</label>
                            <div class="col-md-6">
                                <input id="asal" type="text" class="form-control" name="asal" value="{{$users->datadiri->asal}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_lahir" class="col-md-4 col-form-label text-md-right">Tanggal Lahir</label>
                            <div class="col-md-6">
                                <input id="tanggal_lahir" type="date" class="form-control" name="tanggal_lahir" value="{{$users->datadiri->tanggal_lahir}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">Status</label>
                            <div class="col-md-6">
                                <input id="status" type="text" class="form-control" name="status" value="{{$users->datadiri->status}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat (Jalan)</label>
                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{$users->datadiri->alamat}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kota_alamat" class="col-md-4 col-form-label text-md-right">Kota</label>
                            <div class="col-md-6">
                                <input id="kota_alamat" type="text" class="form-control" name="kota_alamat" value="{{$users->datadiri->kota_alamat}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tahun_lulus" class="col-md-4 col-form-label text-md-right">Tahun Lulus</label>
                            <div class="col-md-6">
                                <input id="tahun_lulus" type="text" class="form-control" name="tahun_lulus" value="{{$users->datadiri->tahun_lulus}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pendidikan" class="col-md-4 col-form-label text-md-right">Nama Instansi</label>
                            <div class="col-md-6">
                                <input id="pendidikan" type="text" class="form-control" name="pendidikan" value="{{$users->datadiri->pendidikan}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jurusan" class="col-md-4 col-form-label text-md-right">Jurusan</label>
                            <div class="col-md-6">
                                <input id="juruusan" type="text" class="form-control" name="jurusan" value="{{ $users->datadiri->jurusan }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hp" class="col-md-4 col-form-label text-md-right">Nomor HP</label>
                            <div class="col-md-6">
                                <input id="hp" type="text" class="form-control" name="hp" value="{{$users->datadiri->hp}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tahun_pengalaman" class="col-md-4 col-form-label text-md-right">Pengalaman Bekerja (Tahun)</label>
                            <div class="col-md-6">
                                <input id="tahun_pengalaman" type="text" class="form-control" name="tahun_pengalaman" value="{{ $users->datadiri->tahun_pengalaman}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pekerjaan" class="col-md-4 col-form-label text-md-right">Jabatan</label>
                            <div class="col-md-6">
                                <input id="pekerjaan" type="text" class="form-control" name="pekerjaan" value="{{$users->datadiri->pekerjaan }}" required>
                            </div>
                        </div>
                        {{--
                        <div class="form-group row">
                            <label for="file_resume" class="col-md-4 col-form-label text-md-right">File Resume</label>
                            <div class="col-md-6">
                                <input id="file_resume" type="text" class="form-control" name="file_resume" value="{{ old('file_resume') }}" required>
                            </div>
                        </div>--}}
                        <div class="form-group row">
                            <label for="file_resume" class="col-md-4 col-form-label text-md-right">File Resume</label>

                            <div class="col-md-6">
                                <div class="custom-file">
                                    <input id="file_resume" type="file" name="file_resume" class="custom-file-input" value="{{$users->datadiri->file_resume }}">
                                    <label class="custom-file-label">Pilih file (pdf)...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
