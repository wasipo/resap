<?php

namespace App\Domains\Auths;

interface AuthRepositoryInterface
{

    public function findByAuthInfo(LoginId $loginId,string $password);

}
