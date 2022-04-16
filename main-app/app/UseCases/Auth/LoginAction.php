<?php

declare(strict_types=1);

namespace App\UseCases\Auth;

use App\Domains\Logins\LoginId;
use App\Domains\Shared\MailAddress;
use App\Presentations\Requests\LoginActionValueInterface;
use Illuminate\Support\Facades\Auth;

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

        // TODO: mailAddressの場合は対応するユーザIDを引き当てる？
        $auth = Auth::attempt([
            $loginId->getLoginId(),
            $password,
        ]);

        $user =['login' => false];
        if($auth) {
            $user = Auth::user();
            $user['login'] = true;
        }

        return [
                $user
        ];
    }

}
