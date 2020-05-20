<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Professor extends Model
{
  use SoftDeletes;

  protected $fillable = [
     'nome'
  ];

  protected $table = 'professores';

  public function disciplina()
  {
       return $this->hasMany('App\Model\Disciplina','professor_id');
  }
}
