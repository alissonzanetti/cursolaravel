<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
      'nome'
    ];
    protected $table = 'cursos';
    protected $timestamps = 'false';

    public function cidade(){
      return $this->belongsTo('App\Model\Cidade', 'cidade_id');
    }

}
