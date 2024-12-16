<?php

namespace Spatie\ModelCleanup;

/**
 * @var \Illuminate\Database\Eloquent\Model
 */
interface GetsCleanedUp
{
    public function cleanUp(CleanupConfig $config): void;
}
