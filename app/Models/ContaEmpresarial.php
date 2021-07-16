<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContaEmpresarial extends Model
{
    use HasFactory;

    protected $table = 'conta_empresarials';

    protected $fillable = [
        'agencia',
        'numero',
        'digito',
        'razao_social',
        'nome_fantasia',
        'cnpj',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function balance()
    {
        return $this->hasOne(Balance::class);
    }

    public function historics()
    {
        return $this->hasMany(Historic::class);
    }

    public function sender($sender)
    {
        return $this->where('razao_social', 'LIKE', "%$sender%")
                ->orWhere('nome_fantasia', 'LIKE', "%$sender%")
                ->get()
                ->first();
    }
}
