<?php

namespace App\Domains\Users;

interface UserRepositoryInterface
{

    public function findById(string $id): User;

    public function save(User $user): bool;
}
