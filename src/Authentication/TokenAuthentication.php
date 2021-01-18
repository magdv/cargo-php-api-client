<?php

declare(strict_types=1);

namespace Cargomart\ApiClient\Authentication;

use Cargomart\ApiClient\Client;

class TokenAuthentication implements AuthenticationInterface
{
    /**
     * @var string|null
     */
    private $token;

    public function __construct(?string $token)
    {
        $this->token = $token;
    }

    public function hasToken(): bool
    {
        return null !== $this->token;
    }

    public function validateToken(Client $client): void
    {
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function requestNewToken(Client $client): void
    {
    }
}
