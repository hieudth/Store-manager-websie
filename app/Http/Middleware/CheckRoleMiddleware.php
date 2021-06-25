<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;

class CheckRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $actions = $request->route()->getAction();

        if (isset($actions['inRoles']))
        {
            $user = Auth::user();

            $roleUsers = $user->roleUsers()->pluck('role_id')->toArray();

            $roles = Role::whereIn('id', $roleUsers)->pluck('slug')->toArray();

            if ($this->hasAccess($roles, $actions['inRoles']))
            {
                return $next($request);
            }
        }

        return redirect()->route('login')
        ->withErrors(['Ban khong co quyen truy cap']);
    }

    private function hasAccess($roles, $actions)
    {
        if (is_array($actions)) {
            if (array_intersect($roles, $actions))
            {
                return true;
            }
        }
        elseif (in_array($actions, $roles))
        {
            return true;
        }

        return false;
    }
}
