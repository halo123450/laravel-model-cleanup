<?php

namespace Halo123450\ModelCleanup;

/**
 * @var \Illuminate\Database\Eloquent\Model
 */
interface GetsCleanedUp
{
    public function cleanUp(CleanupConfig $config): void;
}
