<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class PasienResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'norm' => $this->norm,
            'nama' => $this->nama,
            'tgl_lahir' => Carbon::parse($this->tgl_lahir)->format('d-m-Y'),
            'alamat' => $this->alamat,

            'jenis_kelamin' => new JenisKelaminResource($this->whenLoaded('jenis_kelamin')),
            'register' => new RegistrasiResourceCollection($this->whenLoaded('registrasi')),
        ];
    }
}
