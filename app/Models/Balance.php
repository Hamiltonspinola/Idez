<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Balance extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = ['amount'];

    public function contaEmpresarial()
    {
        return $this->belongsTo(ContaEmpresarial::class);
    }

    public function deposit($value)
    {

        $totalBefore = $this->amount ? $this->amount : 0;
        $this->amount += number_format($value, 2, '.', '');
        $deposit = $this->save();

        $historic = auth()->user()->contaEmpresarial->historics()->create([
            'type'          => 'I',
            'amount'        =>$value,
            'total_before'  => $totalBefore,
            'total_after'   => $this->amount,
            'date'          => date('Ymd'),
        ]);

        if($deposit && $historic)
        {
            return [
                'success'   => true,
                'message'   => 'Sucesso ao carregar!',
            ];
            return [
                'success'   => false,
                'message'   => 'Falha ao carregar!',
            ];
        }
    }


    public function saque($value)
    {
        if($this->amount > $value)
        {
            return [
                'success'     => false,
                'message'     => 'Saldo Insuficiente'
            ];
        }
        $totalBefore = $this->amount ? $this->amount : 0;
        $this->amount -= number_format($value, 2, '.', '');
        $saque = $this->save();

        $historic = auth()->user()->contaEmpresarial->historics()->create([
            'type'          => 'O',
            'amount'        =>$value,
            'total_before'  => $totalBefore,
            'total_after'   => $this->amount,
            'date'          => date('Ymd'),
        ]);

        if($saque && $historic)
        {
            return [
                'success'   => true,
                'message'   => 'Sucesso ao sacar!',
            ];
            return [
                'success'   => false,
                'message'   => 'Falha ao sacar!',
            ];
        }
    }    
}
