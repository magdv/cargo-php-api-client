<?php

namespace Cargomart\ApiClient\Http;

class Status
{
    /**
     * @var int
     */
    private $code;

    public function __construct(int $code)
    {
        $this->code = $code;
    }

    public function isOk(): bool
    {
        return $this->code >= 200 && $this->code < 300;
    }

    public function isRedirect(): bool
    {
        return $this->code >= 300 && $this->code < 400;
    }

    public function isRequestError(): bool
    {
        return $this->code >= 400 && $this->code < 500;
    }

    public function isServerError(): bool
    {
        return $this->code >= 500 && $this->code < 600;
    }

    public function getCode(): int
    {
        return $this->code;
    }
}
