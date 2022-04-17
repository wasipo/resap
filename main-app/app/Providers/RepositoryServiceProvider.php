<?php

declare(strict_types=1);

namespace App\Providers;

use App\Domains\Infrastructures\Users\UserRepository;
use App\Domains\Users\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    public function register(): void {
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );
    }

}
