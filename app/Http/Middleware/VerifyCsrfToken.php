<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'http://127.0.0.1:8000/filmes',
        'http://127.0.0.1:8000/filmes/9',
        'http://127.0.0.1:8000/filmes/13',
        'http://127.0.0.1:8000/filmes/5',
        'http://127.0.0.1:8000/filmes/18',
        'http://127.0.0.1:8000/carros/2',
        'http://127.0.0.1:8000/carros/8',
        'http://127.0.0.1:8000/carros/14',
        'http://127.0.0.1:8000/carros/20',
    ];
}
