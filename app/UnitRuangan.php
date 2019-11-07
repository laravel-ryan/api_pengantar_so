<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitRuangan extends Model
{
    protected $connection = 'operasional';

    protected $table = 'sub_unit_kamar';

    protected $guarded = [];

    public function registrasi() {
        return $this->hasMany(Registrasi::class, 'id_subunit', 'idunit');
    }
}
