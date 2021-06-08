<?php

namespace App\Http\Middleware;

use App\Models\Category;
use App\Models\UserCategory;
use App\Models\UserDepartment;
use Closure;
use Auth;
use Illuminate\Http\Request;
use App\Traits\ApiResponse;

class CheckTenantUserForCategoryToUpdateSelected
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
                /**
                 * Check body parameters
                 *   0. Check user has selected categories
                 *   1. Check category_id in a given array
                 *   2. Check user has an access to the category
                 *        2.1. category -> department_id
                 *        2.2. user -> department_id
                 */
                $userCategories = UserCategory::whereUserId($user->id)->get();
                if ($userCategories->count() === 0) {
                    return $this->forbiddenResponse();
                }
                $userDepartment = UserDepartment::whereUserId($user->id)->first();
                if ($userDepartment === null) {
                    return $this->forbiddenResponse();
                }

                $ids = $request->category_ids;
                $length = count($ids);

                for ($i = 0; $i < $length; $i++) {
                    // condition 1
                    $category = Category::whereId($ids[$i])->first();
                    if ($category === null) {
                        return $this->wrongIdResponse();
                    }

                    // condition 2
                    if ($userDepartment->department_id !== $category->department_id) {
                        return $this->forbiddenResponse();
                    }
                }
                return $next($request);
            }

            if ($user->isSuperAdmin()) {
                return $next($request);
            }
        }

        return $this->forbiddenResponse();
    }
}
