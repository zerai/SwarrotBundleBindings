<?php

declare(strict_types=1);

namespace EventSauce\Swarrot;

use Throwable;

interface ExceptionHandler
{
    public function handle(Throwable $throwable): int;
}
