<?php

declare(strict_types=1);

namespace App\UseCases\User;

use App\Domains\Auths\LoginId;
use App\Domains\Shared\MailAddress;
use App\Domains\Users\User;
use App\Domains\Users\UserId;
use App\Presentations\Requests\UserActionValueInterface;
use App\Domains\Users\UserRepositoryInterface;

class StoreAction
{

    public function __construct(private UserRepositoryInterface $userRepository)
    {
    }

    public function __invoke(UserActionValueInterface $loginActionValue): array
    {

        $user = new User(
            new UserId(),
            new LoginId($loginActionValue->getLoginId()),
            $loginActionValue->getPassword(),
            $loginActionValue->getRealFamilyName(),
            $loginActionValue->getRealName(),
            new MailAddress($loginActionValue->getEmailAddress()));

        $userUpdateOrCreate = $this->userRepository->save($user);

        return [
            $userUpdateOrCreate,
        ];
    }

}
