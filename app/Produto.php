<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    public $timestamps = false;

    protected $fillable = array(
        'nome',
        'valor',
        'descricao',
        'quantidade'
    );

    //protected $guarded = ['id']; // oposto do fillable, não permite o uso do elemento declarado

}
