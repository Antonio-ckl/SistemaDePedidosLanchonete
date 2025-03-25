<?php

use App\Livewire\Cliente\Create as ClienteCreate;
use Illuminate\Support\Facades\Route;

Route::get('/create/cliente', ClienteCreate::class);