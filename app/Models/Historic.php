<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historic extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'amount', 'total_before', 'total_after', 'date', 'user_id_transaction'];


    public function contaEmpresarial()
    {
        return $this->belongsTo(ContaEmpresarial::class);
    }
}
