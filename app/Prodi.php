<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'tb_prodi';
    protected $primaryKey = 'ID';
    protected $fillable = ['NAMA'];

    public function reportAttendance()
    {
        return $this->hasMany(ReportAttendance::class);
    }
}
