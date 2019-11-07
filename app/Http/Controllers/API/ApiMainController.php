<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PasienResource;
use App\Http\Resources\RegistrasiResourceCollection;
use App\Pasien;
use App\Registrasi;
use App\UnitRuangan;
use Illuminate\Http\Request;

class ApiMainController extends Controller
{
    public function getPasien($norm) {
        $pasien = Pasien::where('norm', $norm)->with('registrasi')
            ->with('registrasi.unit')
            ->with('jenis_kelamin')
            ->with('registrasi.cara_bayar')
            ->first();


        PasienResource::withoutWrapping();
        return new PasienResource($pasien);


    }
}
