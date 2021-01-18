<?php

declare(strict_types=1);

namespace Cargomart\ApiClient\Authentication;

class MemorySessionStorage implements SessionStorageInterface
{
    /**
     * @var array
     */
    private $data = [];

    public function storeToken(string $key, string $token): void
    {
        $this->data[$key] = $token;
    }

    public function readToken(string $key): ?string
    {
        return $this->data[$key] ?? null;
    }

    public function clearToken(string $key): void
    {
        unset($this->data[$key]);
    }

    public function getData(): array
    {
        return $this->data;
    }
}
