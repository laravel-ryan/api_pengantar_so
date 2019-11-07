<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaraBayar extends Model
{
    protected $connection = 'operasional';

    protected $table = 'sub_cara_bayar';

    protected $guarded = [];
}
