<?php

namespace App\Support;

class Runtime
{
    public static function isLambda(): bool
    {
        return isset($_SERVER['AWS_LAMBDA_FUNCTION_NAME']);
    }
}
