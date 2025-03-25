<?php


use App\Livewire\Produto\Create as produtoCreate;
use Illuminate\Support\Facades\Route;
use App\Livewire\Cliente\Create as ClienteCreate;


Route::get('/create/produto', produtoCreate::class);

Route::get('/create/cliente', ClienteCreate::class);

