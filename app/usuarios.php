<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $fillable = ['id, nome, senha, email, nf, setor, msg, und'];
}
