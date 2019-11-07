<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegistrasiResource extends JsonResource
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
            'id_reg_lengkap' => $this->id_reg_lengkap,
            'norm' => $this->norm,
            'tgl_reg' => $this->tgl_reg,
            'unit' => new UnitRuanganResource($this->whenLoaded('unit')),
            'cara_bayar' => new CaraBayarResource($this->whenLoaded('cara_bayar'))
        ];
    }
}
