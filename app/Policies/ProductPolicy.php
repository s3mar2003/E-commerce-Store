<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProductPolicy
{
    /**
     * Determine whether the user can view any models.
     */
   public function viewAny(User $user): bool
    {
        // maybe allow all authenticated users to view
        return true;
    }

    public function view(User $user, Product $product): bool
    {
        return true;
    }

   public function update(User $user, Product $product)
{
    return $user->is_admin;
}


    public function delete(User $user, Product $product): bool
    {
        return (bool) $user->is_admin;
    }
}
