<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
// 1. Add the "use" statement for your middleware at the top
use App\Http\Middleware\AdminMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) { // The variable is "$middleware"
        
        // 2. Use the alias() method to register your route middleware
        // This is the new replacement for the $routeMiddleware array
        $middleware->alias([
            'admin' => AdminMiddleware::class,
            
            // You can add other aliases here too, for example:
            // 'auth' => \App\Http\Middleware\Authenticate::class, // Already registered by default
            // 'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class, // Already registered by default
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();