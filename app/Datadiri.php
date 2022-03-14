<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datadiri extends Model
{
    protected $fillable = [

        'nama',
        'foto',
        'asal',
        'tanggal_lahir',
        'status',
        'usia',
        'alamat',
        'kota_alamat',
        'tahun_lulus',
        'pendidikan',
        'jurusan',
        'hp',
        'tahun_pengalaman',
        'pekerjaan',
        'file_resume',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
