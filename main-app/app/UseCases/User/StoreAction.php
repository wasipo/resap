<?php

declare(strict_types=1);

namespace App\UseCases\User;

use App\Domains\Logins\LoginId;
use App\Domains\Shared\MailAddress;
use App\Presentations\Requests\UserActionValueInterface;

class StoreAction
{

    public function __construct(
    )
    {
    }

    public function __invoke(UserActionValueInterface $loginActionValue): array
    {
        $loginId =  new LoginId($loginActionValue->getLoginId());
        $mailAddress = new MailAddress($loginActionValue->getEmailAddress());
        $password = $loginActionValue->getPassword();
        $realFamilyName = $loginActionValue->getRealFamilyName();
        $realName = $loginActionValue->getRealName();



    }

}
