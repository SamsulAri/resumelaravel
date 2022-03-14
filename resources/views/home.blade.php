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
                            <div class="col-md-6">
                                <table class="table">

                                    <tr>
                                        <td ><strong>Nama :</strong></td>
                                        <td>{{ $userx->name }}</td>
                                    </tr>
                                    <tr>
                                        <td ><strong>Email :</strong></td>
                                        <td>{{ $userx->email }}</td>
                                    </tr>
                                    <tr>
                                        <td ><strong>Lowongan :</strong></td>
                                        <td>{{ $userx->lowongan }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <a class="btn btn-primary" href="{{route('datadiri.create')}}">Lengkapi Data Diri</a>
                                        </td>
                                        <td>
                                        <a class="btn btn-success" href="{{route('datadiri.show',$userx->id)}}">Lihat Data Diri</a>
                                        </td>
                                    </tr>

                                </table>
                            </div>


                        </div>

                    @can('isAdmin')
                        <div class="col-lg-12 margin-tb">
                            {{-- {{ route('users.create') }}, {{ route('users.show',$user->id) }},{{ route('users.edit',$user->id) }} --}}
                            <div class="pull-right mb-3 mt-3">
                                <a class="btn btn-success" href="">Tambah Data Diri Pelamar</a>
                            </div>
                        </div>

                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jabatan Dilamar</th>
                            <th width="280px">Tindakan</th>
                        </tr>

                        @foreach($users as $key => $user)
                        <tr>
                            <td>{{ ++$i}}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->lowongan }}</td>
                            <td>
                            <a class="btn btn-info" href="{{route('admin.show',$user->id)}}">Detail</a>

                            <a class="btn btn-primary" href="">Ubah</a>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                    {!! $users->render() !!}
                    @endcan
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
