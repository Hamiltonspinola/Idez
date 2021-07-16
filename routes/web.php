<?php

use App\Http\Livewire\Balance;
use App\Http\Livewire\ContaEmpresarial;
use App\Http\Livewire\ContaPessoal;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware('auth')->prefix('user')->group(function(){

/**
* Rotas de saldo
*/
Route::post('/confirm-transfer', [Balance::class, 'balanceConfirmTransferStore'])->name('balance.confirm.transfer.store');
Route::post('transfer', [Balance::class, 'balanceTransferStore'])->name('balance.transfer.store');
Route::get('transfer', [Balance::class, 'balanceTransfer'])->name('balance.transfer');

Route::post('/saque/create', [Balance::class, 'balanceSaqueStore'])->name('balance.saque.store');
Route::get('/saque/create', [Balance::class, 'balanceSaque'])->name('balance.saque');

Route::post('/saldo/create', [Balance::class, 'balanceStore'])->name('balance.store');
Route::get('/saldo/create', [Balance::class, 'balanceCreate'])->name('balance.create');
Route::get('/saldo', [Balance::class, 'render'])->name('balance.render');

/**
 * Rotas de Conta Pessoal
 */

Route::get('contaPessoal/create', [ContaPessoal::class, 'create'])->name('contaPessoal.create');
Route::post('contaPessoal/create', [ContaPessoal::class, 'store'])->name('contaPessoal.store');
Route::get('contaPessoal/edit/{id}', [ContaPessoal::class, 'edit'])->name('contaPessoal.edit');
Route::put('contaPessoal/edit/{id}', [ContaPessoal::class, 'update'])->name('contaPessoal.update');
Route::get('contaPessoal/show/{id}', [ContaPessoal::class, 'show'])->name('contaPessoal.show');
Route::delete('contaPessoal/{id}', [ContaPessoal::class, 'destroy'])->name('contaPessoal.destroy');
Route::get('contaPessoal', [ContaPessoal::class, 'render'])->name('contaPessoal.render');

/**
 * Rotas de Conta Empresarial
 */
Route::get('contaEmpresarial/create', [ContaEmpresarial::class, 'create'])->name('contaEmpresarial.create');
Route::post('contaEmpresarial/create', [ContaEmpresarial::class, 'store'])->name('contaEmpresarial.store');
Route::get('contaEmpresarial/edit/{id}', [ContaEmpresarial::class, 'edit'])->name('contaEmpresarial.edit');
Route::put('contaEmpresarial/edit/{id}', [ContaEmpresarial::class, 'update'])->name('contaEmpresarial.update');
Route::get('contaEmpresarial/show/{id}', [ContaEmpresarial::class, 'show'])->name('contaEmpresarial.show');
Route::delete('contaEmpresarial/{id}', [ContaEmpresarial::class, 'destroy'])->name('contaEmpresarial.destroy');
Route::get('contaEmpresarial', [ContaEmpresarial::class, 'render'])->name('contaEmpresarial.render');
    
});
