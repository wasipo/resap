<?php

namespace App\Domains\Infrastructures\Users;

use Illuminate\Support\Facades\DB;
use App\Domains\Users\User;
use App\Domains\Users\UserRepositoryInterface;
use App\Models\User as UserModel;

class UserRepository implements UserRepositoryInterface
{



    public function save(User $user): bool
    {

        /** @var UserModel $update */
        $update = UserModel::updateOrCreate(
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
        )->wasRecentlyCreated();

        if($update) {
            return true;
        }
        return false;
    }
}
