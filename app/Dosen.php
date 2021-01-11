<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'tb_dosen';
    protected $primaryKey = 'ID';
    protected $fillable = ['NIP', 'NAMA'];
    
    public function reportAttendance()
    {
        return $this->hasMany(ReportAttendance::class);
    }
}
