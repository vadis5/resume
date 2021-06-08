<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use App\Traits\ApiResponse;

class CheckTenantUser
{
    use ApiResponse;

    /**
     * Handle an incoming request.
     *
     * @param Request  $request
     * @param \Closure $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        if ($user = Auth::user()) {
            if ($user->isTenantUser()) {
                return $next($request);
            }
        }

        return $this->forbiddenResponse();
    }
}
