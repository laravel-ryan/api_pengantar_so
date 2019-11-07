<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    protected $connection = 'operasional';

    protected $table = 'register';

    protected $guarded = [];


    public function pasien() {
        return $this->belongsTo(Pasien::class, 'smf', 'norm');
    }

    public function unit() {
        return $this->belongsTo(UnitRuangan::class, 'idunit', 'id_subunit');
    }

    public function cara_bayar() {
        return $this->belongsTo(CaraBayar::class, 'idcarabyr', 'id_sub_cara_bayar');
    }

}
