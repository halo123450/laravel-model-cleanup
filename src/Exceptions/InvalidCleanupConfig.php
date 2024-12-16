<?php

namespace Halo123450\ModelCleanup\Exceptions;

use Exception;
use Halo123450\ModelCleanup\GetsCleanedUp;

class InvalidCleanupConfig extends Exception
{
    public static function create(GetsCleanedUp $model): self
    {
        $modelClass = get_class($model);

        return new static("The clean up configuration for model `$modelClass` is invalid. You should call either a `olderThan` method or `scope` on it.");
    }
}
