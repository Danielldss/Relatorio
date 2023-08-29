<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\OrcamentosController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FinanceiroController;



Route::get('/' , [AuthController::class, 'index'])->name('home');

Route::prefix('auth')->group(function (){
    Route::post('/login' , [AuthController::class, 'authentication'])->name('auth.login');
    Route::get('/logout' , [AuthController::class, 'logout'])->name('auth.logout');
});

Route::get('/home',[DashboardController::class, 'index'])->name('admin.home');

/**
 * Serviço
 */

Route::prefix('relatorio')->group(function (){
    Route::get('index', [RelatorioController::class, 'index'])->name('admin.list-service');
    Route::get('create', [RelatorioController::class, 'create'])->name('admin.new-service');
    Route::post('store', [RelatorioController::class, 'store'])->name('admin.store-service');
    Route::get('show', [RelatorioController::class, 'show']);
    Route::get('edit/{id}', [RelatorioController::class, 'edit'])->name('admin.edit-service');
    Route::post('update/{id}', [RelatorioController::class, 'update'])->name('admin.update-service');
    Route::get('delete/{id}', [RelatorioController::class, 'destroy'])->name('admin.delete-service');
    Route::get('exportar-pdf/{filtro?}', [RelatorioController::class, 'exportToPDF'])->name('admin.relatorioExport-pdf');

});

/**
 * Orçamentos
 */

Route::prefix('orcamentos')->group(function (){
    Route::get('index', [OrcamentosController::class, 'index'])->name('admin.list-orcamentos');
    Route::get('create', [OrcamentosController::class, 'create'])->name('admin.new-orcamentos');
    Route::post('store', [OrcamentosController::class, 'store'])->name('admin.store-orcamentos');

    Route::get('produto/{id}', [OrcamentosController::class, 'product'])->name('admin.produto-orcamentos');
    Route::post('new-product', [OrcamentosController::class, 'AddProduct'])->name('admin.newProduct-orcamentos');

    Route::get('delete/{id}', [OrcamentosController::class, 'destroy'])->name('admin.delete-orcamentos');
    Route::get('item/{id}', [OrcamentosController::class, 'itemOrcamento'])->name('admin.item-orcamentos');
    Route::get('exportar-pdf/{id}', [OrcamentosController::class, 'exportToPDF'])->name('admin.OrçamentoExport-pdf');
});

/**
 * Financeiro
 */
Route::prefix('financerio')->group(function (){
    Route::get('index', [FinanceiroController::class, 'index'])->name('admin.financeiro');
});


