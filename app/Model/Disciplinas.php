<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Disciplinas extends Model
{
  protected $table = 'disciplinas';

  protected $fillable = [
    'nome','professor_id'
  ];

  public $timestamps = false;

  public function professor()
  {
    return $this->belongsTo('App\Model\Professor','professor_id');
  }
}
