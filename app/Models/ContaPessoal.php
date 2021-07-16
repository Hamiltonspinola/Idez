<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContaPessoal extends Model
{
    use HasFactory;

    protected $table = 'conta_pessoals';

    protected $fillable = ['agencia', 'numero', 'digito'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
