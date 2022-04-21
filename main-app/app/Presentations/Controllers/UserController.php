<?php

namespace App\Presentations\Controllers;

use App\Http\Controllers\Controller;
use App\Presentations\Requests\UserActionValueRequest;
use App\UseCases\User\StoreAction;

class UserController extends Controller
{

    public function createUser(UserActionValueRequest $request,  StoreAction $action): array
    {
        return (array)$action($request);
    }

    public function createOwner(UserActionValueRequest $request,  StoreAction $action): array
    {
        return (array)$action($request);
    }

    public function createAdmin(UserActionValueRequest $request,  StoreAction $action): array
    {
        return (array)$action($request);
    }

}
