<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'tb_matkul';
    protected $primaryKey = 'ID';
    protected $fillable = ['KODE_MK', 'NAMA'];

    public function reportAttendance()
    {
        return $this->hasMany(ReportAttendance::class);
    }
}
