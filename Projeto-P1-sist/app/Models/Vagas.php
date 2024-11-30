<?php

namespace App\Models;

use App\Models\Veiculos;
use app\Models\Clientes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vagas extends Model
{
    protected $fillable = ['ocupado','hora_entrada','hora_saida', 'veiculo_id' ,'cliente_id'];


    public function veiculo() {
        return $this->belongsTo(Veiculos::class);

    }

    public function cliente() {
        return $this->belongsTo(Clientes::class);
    }
}
