<?php

namespace App\Presentations\Controllers;

use App\Http\Controllers\Controller;
use App\Presentations\Requests\UserActionValueRequest;
use App\UseCases\User\StoreAction;

class UserController extends Controller
{

    public function createUser(UserActionValueRequest $request,  StoreAction $action)
    {
        return (array)$action($request);
    }

}
