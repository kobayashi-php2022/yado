<?php

namespace App\Providers;

use App\Models\Hotel;
use App\Policies\HotelPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
<<<<<<< HEAD
        'App\Models\Hotel' => 'App\Policies\HotelPolicy',
=======
        Hotel::class => HotelPolicy::class,
>>>>>>> b73a2f4c3766907b54abd75a90c7bf8a37afe22a
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
