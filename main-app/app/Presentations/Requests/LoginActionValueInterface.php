<?php

namespace App\Presentations\Requests;

interface LoginActionValueInterface
{
    public function getLoginId(): string|null;

    public function getMailAddress(): string|null;

    public function getPassword(): string;
}
