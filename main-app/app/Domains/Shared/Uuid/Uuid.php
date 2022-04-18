<?php

namespace App\Domains\Shared\Uuid;

use Illuminate\Support\Str;

class Uuid
{
    private string $uuid;

    /**
     * @param string|null $value
     */
    public function __construct(string | null $value = null)
    {
        if (is_null($value)) {
            $this->uuid = (string) Str::orderedUuid();
        } else {
            $this->uuid = $value;
        }
    }

    /**
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
}
