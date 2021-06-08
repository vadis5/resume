<?php

namespace App\Policies;

use App\Models\Company;
use App\Models\CompanyUser;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompanyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param User $model
     *
     * @return mixed
     */
    public function destroy(User $user): bool
    {
        return ($user->isAdmin() or $user->isSuperAdmin());
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param User $model
     *
     * @return mixed
     */
    public function view(User $user, Company $model): bool
    {
        $companyUser = CompanyUser::whereCompanyId($model->id)->first();
        return ($user->isAdmin() or $user->isSuperAdmin() or $user->id === $companyUser->user_id);
    }
}
