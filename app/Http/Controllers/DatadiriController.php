<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Datadiri;

use Illuminate\Http\Request;

class DatadiriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datadiri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request -> validate([
            'nama' => 'required',
            'asal' => 'required',
            'tanggal_lahir' => 'required',
            'status' => 'required',
            'alamat' => 'required',
            'kota_alamat' => 'required',
            'tahun_lulus' => 'required',
            'pendidikan' => 'required',
            'jurusan' => 'required',
            'hp' => 'required',
            'tahun_pengalaman' => 'required',
            'pekerjaan' => 'required',
        ]);

        $datadiri = new Datadiri();
        $datadiri -> nama = $request -> nama;
        //$datadiri -> foto = $request -> foto;

        if($request->hasfile('file_resume')){
            $file = $request->file('file_resume');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file -> move('img/resume/', $filename);
                $datadiri->foto = $filename;
            }else{
    //            return $request;
                $datadiri->foto = '';
            }

        $datadiri -> asal = $request -> asal;
        $datadiri -> tanggal_lahir = $request -> tanggal_lahir;
        $datadiri -> status = $request -> status;
        $datadiri -> alamat = $request -> alamat;
        $datadiri -> kota_alamat = $request -> kota_alamat;
        $datadiri -> tahun_lulus = $request -> tahun_lulus;
        $datadiri -> pendidikan = $request -> pendidikan;
        $datadiri -> jurusan = $request -> jurusan;
        $datadiri -> hp = $request -> hp;
        $datadiri -> tahun_pengalaman = $request -> tahun_pengalaman;
        $datadiri -> pekerjaan = $request -> pekerjaan;
        //$datadiri -> file_resume = $request -> file_resume;


        if($request->hasfile('file_resume')){
        $file = $request->file('file_resume');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file -> move('img/resume/', $filename);
            $datadiri->file_resume = $filename;
        }else{
//            return $request;
            $datadiri->file_resume = '';
        }

        $datadiri -> user_id = Auth::user()->id;

        $datadiri -> save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = Auth::user();
        $datadiri = Datadiri::find($id);

        return view('datadiri.show',compact('users','datadiri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = Auth::user();
        $datadiri = Datadiri::find($id);

        return view('datadiri.edit',compact('users','datadiri'));
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

        $request -> validate([
            'nama' => 'required',
            'asal' => 'required',
            'tanggal_lahir' => 'required',
            'status' => 'required',
            'alamat' => 'required',
            'kota_alamat' => 'required',
            'tahun_lulus' => 'required',
            'pendidikan' => 'required',
            'jurusan' => 'required',
            'hp' => 'required',
            'tahun_pengalaman' => 'required',
            'pekerjaan' => 'required',
        ]);
        //dd($request->all());
        $datadiri = Datadiri::findOrFail($id);
        $datadiri -> nama = $request -> nama;

        //$datadiri -> foto = $request -> foto;

        if($request->hasfile('file_resume')){
            $file = $request->file('file_resume');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file -> move('img/resume/', $filename);
                $datadiri->foto = $filename;
            }else{
    //            return $request;
                $datadiri->foto = $datadiri->foto;
            }

        $datadiri -> asal = $request -> asal;
        $datadiri -> tanggal_lahir = $request -> tanggal_lahir;
        $datadiri -> status = $request -> status;
        $datadiri -> alamat = $request -> alamat;
        $datadiri -> kota_alamat = $request -> kota_alamat;
        $datadiri -> tahun_lulus = $request -> tahun_lulus;
        $datadiri -> pendidikan = $request -> pendidikan;
        $datadiri -> jurusan = $request -> jurusan;
        $datadiri -> hp = $request -> hp;
        $datadiri -> tahun_pengalaman = $request -> tahun_pengalaman;
        $datadiri -> pekerjaan = $request -> pekerjaan;
        //$datadiri -> file_resume = $request -> file_resume;


        if($request->hasfile('file_resume')){
        $file = $request->file('file_resume');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file -> move('img/resume/', $filename);
            $datadiri->file_resume = $filename;
        }else{
//            return $request;
            $datadiri->file_resume = $datadiri->file_resume;
        }

        $datadiri -> user_id = Auth::user()->id;

        $datadiri -> save();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
