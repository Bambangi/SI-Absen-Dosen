<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportAttendance extends Model
{
    protected $table = 'tb_report_attendance';
    protected $primaryKey = 'ID';
    protected $fillable = [
        'PRODI', 
        'SEMESTER', 
        'PERTEMUAN', 
        'TGL',
        'JAM',
        'MATKUL',
        'DOSEN',
        'PEMBAHASAN'
    ];


    public function dosen()
    {
        // ('namaObjek','fk tabel')
        return $this->belongsTo('App\Dosen', 'DOSEN');
    }

    public function matkul()
    {
        return $this->belongsTo('App\Matkul', 'MATKUL');
    }

    public function prodi()
    {
        return $this->belongsTo('App\Prodi', 'MATKUL');
    }
}
