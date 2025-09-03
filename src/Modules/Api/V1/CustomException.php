<?php

declare(strict_types=1);

namespace Modules;

use Exception;

final class CustomException extends Exception
{
    public static function internalException(): self
    {
        return new self('Internal exception', 500);
    }
}
