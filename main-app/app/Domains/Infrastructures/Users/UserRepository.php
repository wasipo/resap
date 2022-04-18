<?php

namespace App\Domains\Infrastructures\Users;

use App\Domains\Auths\LoginId;
use App\Domains\Shared\MailAddress;
use App\Domains\Users\UserId;
use App\Exceptions\RepositoryException;
use App\Domains\Users\User;
use App\Domains\Users\UserRepositoryInterface;
use App\Models\User as UserModel;

class UserRepository implements UserRepositoryInterface
{

    /**
     * @param User $user
     * @return bool
     */
    public function save(User $user): bool
    {

        $updateOrCreate = UserModel::updateOrCreate(
            [
                'id' => $user->getId()
            ]
            ,
            [
                'id' => $user->getId(),
                'login_id' => $user->getLoginId(),
                'password' => $user->getPassword(),
                'real_family_name' => $user->getRealFamilyName(),
                'real_name' => $user->getRealName(),
                'mail_address' => $user->getMailAddress()
            ]
        );

        return $updateOrCreate->wasRecentlyCreated;

    }

    public function findById(string $id): User
    {
        // TODO: Implement findById() method.
    }
}
