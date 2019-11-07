<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisKelamin extends Model
{
    protected $connection = 'operasional';

    protected $table = 'jns_kelamin';

    protected $guarded = [];

    public function pasien() {
        return $this->hasMany(Pasien::class, 'idkelamin', 'idkelamin');
    }
}
