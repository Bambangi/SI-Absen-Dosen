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
        'MATKUL',
        'KODE_MK',
        'DOSEN',
        'PEMBAHASAN'
    ];

    public function dosen()
    {
        return $this->hasOne(Dosen::class);
    }

    public function matkul()
    {
        return $this->hasOne(Matkul::class);
    }

    public function prodi()
    {
        return $this->hasOne(Prodi::class);
    }
}
