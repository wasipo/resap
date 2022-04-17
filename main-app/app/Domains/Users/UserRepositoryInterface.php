<?php

namespace App\Domains\Users;

interface UserRepositoryInterface
{

    public function save(User $user);

}
