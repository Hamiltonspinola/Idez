<?php

namespace App\Http\Livewire;

use App\Models\ContaEmpresarial;
use Illuminate\Http\Request;
use Livewire\Component;

class Balance extends Component
{
    public function render()
    {
        $balance = auth()->user()->contaEmpresarial->balance()->get();
        //Se $balance for diferente de null, o valor será 0
        if($balance != null){$balance->amount = 0;}
        return view('livewire.balance.balance', compact('balance'));
    }

    public function balanceCreate()
    {
        return view('livewire.balance.create');
    }

    public function balanceStore(Request $request)
    {
        $balance = auth()->user()->contaEmpresarial->balance()->firstOrCreate([]);
        $balance->deposit($request->value);
        return redirect()->route('balance.render');
    }

    public function balanceSaque()
    {
        return view('livewire.balance.saque');
    }

    public function balanceSaqueStore(Request $request)
    {
        $balance = auth()->user()->contaEmpresarial->balance()->firstOrCreate([]);
        $balance->saque($request->value);
        return redirect()->route('balance.render');
    }

    public function balanceTransfer()
    {
        return view('livewire.balance.sender');
    }

    public function balanceTransferStore(Request $request, ContaEmpresarial $contaEmpresarial)
    {
        if(!$sender = $contaEmpresarial->sender($request->sender)){
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        if($sender->id === auth()->user()->id){
            return redirect()->back()->with('error', 'Não pode enviar para você mesmo.');
        }

        return view('livewire.balance.confirm-transfer', compact('sender'));
    }

    public function balanceConfirmTransferStore(Request $request)
    {
        dd($request->all());
    }
}
