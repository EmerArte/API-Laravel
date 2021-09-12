<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
        'id'=> $this->id,
        'nombre' => $this->nombre,
        'apellido' => $this->apellido,
        'direccion' => $this->direccion,
        'correo' => $this->correo,
        'password' => $this->password,
        'telefono'=> $this->telefono,
        'facebook'=> $this->facebook,
        'membersia_id'=>$this->membersia_id,
        'edad'=> $this->edad,
        'peso'=> $this->peso,
        'estatura'=> $this->estatura,
        'created_at' => $this->created_at->format('d-m-Y'),
        'updated_at' => $this->updated_at->format('d-m-Y')
        ];
    }
}
