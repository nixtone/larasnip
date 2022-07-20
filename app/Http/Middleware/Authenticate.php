<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        // Метод будет исполнен, если мы не ожидаем от сервера данных в формате json
        if (! $request->expectsJson()) {
            // Адрес куда перекидывать пользователя, если он не аутентифицирован
            return route('user.login');
        }
    }
}
