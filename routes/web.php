<?php

use App\Livewire\Produto\Create as produtoCreate;
use Illuminate\Support\Facades\Route;

Route::get('/create/produto', produtoCreate::class);