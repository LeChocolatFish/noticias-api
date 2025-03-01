<?php //Abre a execução da linguagem php

namespace App\Models; // espaço de trabalho (só vai executar aqui)

use Illuminate\Database\Eloquent\Model; // esta sendo usado para chamar o componente model

class Manchete extends Model//a classe manchete esta herdando os métodos da classe model
{
    protected $fillable = [ //abre um array fillable  do tipo protegido 
        'titulo',
        'conteudo',//os objetos
        'data',
    ];
}
