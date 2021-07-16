<?php

namespace App\Http\Livewire;

use App\Models\ContaPessoal as ModelsContaPessoal;
use Illuminate\Http\Request;
use Livewire\Component;

class ContaPessoal extends Component
{
    public function render()
    {
        $contaPessoal = ModelsContaPessoal::with('user')->get();
        return view('livewire.contaPessoal.conta-pessoal', compact('contaPessoal'));
    }

    public function create()
    {
        return view('livewire.contaPessoal.create');
    }

    public function store(Request $request)
    {
        $id = ModelsContaPessoal::get();
        if(count($id)>=1){
            return redirect()->back();
        }

        $contaPessoal = auth()->user()->contaPessoal()->create($request->all());
        return redirect()->route('contaPessoal.render');
    }

    public function edit($id)
    {
        $contaPessoal = ModelsContaPessoal::find($id);
        return view('livewire.contaPessoal.edit', compact('contaPessoal'));
    }

    public function update(Request $request, $id)
    {
        $contaPessoal = ModelsContaPessoal::find($id);
        $contaPessoal->update($request->all());
        return redirect()->route('contaPessoal.render');
    }

    public function show($id)
    {
        $contaPessoal = ModelscontaPessoal::with('user')->get();
        return view('livewire.contaPessoal.show', compact('contaPessoal'));
    }

    public function destroy($id)
    {
        $contaPessoal = ModelscontaPessoal::find($id);
        $contaPessoal->delete();

        return redirect()->route('contaPessoal.render');
    }
}
