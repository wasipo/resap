<?php

namespace App\Domains\Infrastructures\Users;

use Illuminate\Support\Facades\DB;
use App\Domains\Users\User;
use App\Domains\Users\UserRepositoryInterface;
use App\Models\User as UserModel;

class UserRepository implements UserRepositoryInterface
{

    public function save(User $user): User
    {
        $userModel = UserModel::updateOrCreate(
            [
                $user->getId()
            ]
            ,
            [
                $user->getLoginId(),
                $user->getPassword(),
                $user->getRealFamilyName(),
                $user->getRealName(),
                $user->getMailAddress()
            ]
        );

        return new User(
            $userModel->id,
            $userModel->login_id,
            $userModel->password,
            $userModel->real_family_name,
            $userModel->real_name,
            $userModel->mail_address
        );
    }
}
