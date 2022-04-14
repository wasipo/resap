<?php

namespace App\Presentations\Controllers;

use App\Http\Controllers\Controller;
use App\Presentations\Requests\LoginActionValueRequest;
use App\UseCases\LoginAction;

class AuthController extends Controller
{

    /**
     * @param LoginActionValueRequest $request
     * @param LoginAction $action
     * @return array
     */
    public function login(LoginActionValueRequest $request,  LoginAction $action): array
    {
        return (array)$action($request);
    }

}
