<?php

declare(strict_types=1);

namespace Cargomart\ApiClient\Authentication;

class FileSessionStorage implements SessionStorageInterface
{
    /**
     * @var string
     */
    private $filePath;

    /**
     * @var array
     */
    private $data = [];

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
        if (file_exists($this->filePath)) {
            $data = @file_get_contents($this->filePath);
            if ($data) {
                $this->data = @unserialize($data, ['allowed_classes' => false]);
                if (! is_array($this->data)) {
                    $this->data = [];
                }
            }
        }
    }

    public function storeToken(string $key, string $token): void
    {
        $this->data[$key] = $token;
        $this->flushData();
    }

    public function readToken(string $key): ?string
    {
        return $this->data[$key] ?? null;
    }

    public function clearToken(string $key): void
    {
        if (isset($this->data[$key])) {
            unset($this->data[$key]);
            $this->flushData();
        }
    }

    private function flushData(): void
    {
        file_put_contents($this->filePath, serialize($this->data));
    }
}
