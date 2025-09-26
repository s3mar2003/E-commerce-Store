<?php

namespace App\Providers;

use App\Models\Product;
use App\Policies\ProductPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class AuthServiceProvider extends ServiceProvider
{
    
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Product::class => ProductPolicy::class,
    ];

    public function boot(): void
    {
        Gate::define('access-admin-panel', function ($user) {
    if (! $user->is_admin) {
        Log::warning('Unauthorized access attempt by user ID: ' . $user->id);
    }
    return $user->is_admin;
});
        $this->registerPolicies();

}
}
