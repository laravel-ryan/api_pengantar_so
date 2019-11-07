<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $connection = 'operasional';

    protected $table = 'identitas_psn';

    protected $guarded = [];

    public function registrasi() {
        return $this->hasMany(Registrasi::class, 'norm', 'norm');
    }

    public function jenis_kelamin() {
        return $this->belongsTo(JenisKelamin::class, 'idkelamin', 'idkelamin');
    }
}
