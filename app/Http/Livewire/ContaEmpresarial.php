<?php

namespace App\Http\Livewire;

use App\Models\ContaEmpresarial as ModelsContaEmpresarial;
use Illuminate\Http\Request;
use Livewire\Component;
class ContaEmpresarial extends Component
{
    public function render()
    {
        $contaEmpresarial = ModelsContaEmpresarial::with('user')->get();
        return view('livewire.contaEmpresarial.conta-empresarial', compact('contaEmpresarial'));
    }

    public function create()
    {
        return view('livewire.contaEmpresarial.create');
    }

    public function store(Request $request)
    {
        $id = ModelsContaEmpresarial::get();
        if(count($id)>=1){
            return redirect()->back();
        }

        $contaEmpresarial = auth()->user()->contaEmpresarial()->create($request->all());
        return redirect()->route('contaEmpresarial.render');
    }

    public function edit($id)
    {
        $contaEmpresarial = ModelsContaEmpresarial::find($id);
        return view('livewire.contaEmpresarial.edit', compact('contaEmpresarial'));
    }

    public function update(Request $request, $id)
    {
        $contaEmpresarial = ModelsContaEmpresarial::find($id);
        $contaEmpresarial->update($request->all());
        return redirect()->route('contaEmpresarial.render');
    }

    public function show($id)
    {
        $contaEmpresarial = ModelsContaEmpresarial::with('user')->get();
        return view('livewire.contaEmpresarial.show', compact('contaEmpresarial'));
    }

    public function destroy($id)
    {
        $contaEmpresarial = ModelsContaEmpresarial::find($id);
        $contaEmpresarial->delete();

        return redirect()->route('contaEmpresarial.render');
    }
}
