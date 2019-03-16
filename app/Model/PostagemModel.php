<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PostagemModel extends Model
{
    protected $table = 'postagens';
    
    protected $fillable = ['titulo', 'descricao'];
    
    protected $guard = ['id', 'remember_token', 'created_at', 'updated_at'];
}
