<?php

declare(strict_types=1);

namespace EventSauce\Swarrot;

use Throwable;

class NaiveExceptionHandler
{
    /**
     * @var int
     */
    private $response;

    public function __construct(int $response)
    {
        $this->response = $response;
    }

    public function handle(Throwable $throwable): int
    {
        return $this->response;
    }
}
