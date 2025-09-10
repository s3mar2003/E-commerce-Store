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
        $this->registerPolicies();

        Gate::define('access-admin-panel', function ($user) {
            // If user is not admin, log an attempt and deny.
            if (empty($user->is_admin) || ! $user->is_admin) {
                Log::warning('Unauthorized attempt to access admin panel', [
                    'user_id' => $user->id ?? null,
                    'email' => $user->email ?? null,
                    'timestamp' => now()->toDateTimeString(),
                ]);
                return false;
            }
            return true;
        });
    }
}
