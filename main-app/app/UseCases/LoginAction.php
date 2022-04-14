<?php

declare(strict_types=1);

namespace App\UseCases;

use App\Domains\Logins\LoginId;
use App\Domains\Shared\MailAddress;
use App\Presentations\Requests\LoginActionValueInterface;

class LoginAction
{

    public function __construct(
    )
    {
    }

    public function __invoke(LoginActionValueInterface $loginActionValue): array
    {
        $loginId =  new LoginId($loginActionValue->getLoginId());
        $mailAddress = new MailAddress($loginActionValue->getMailAddress());
        $password = $loginActionValue->getPassword();
        var_dump($loginId->getLoginId(),$mailAddress->getMailAddress(),$password);
        return [];
    }

}
