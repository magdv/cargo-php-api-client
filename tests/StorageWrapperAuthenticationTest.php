<?php

declare(strict_types=1);

namespace Cargomart\ApiClient\Tests;

use Cargomart\ApiClient\Authentication\exceptions\SessionStorageException;
use Cargomart\ApiClient\Authentication\exceptions\TokenInvalidException;
use Cargomart\ApiClient\Authentication\LoginPasswordAuthentication;
use Cargomart\ApiClient\Authentication\MemorySessionStorage;
use Cargomart\ApiClient\Authentication\SessionStorageInterface;
use Cargomart\ApiClient\Authentication\StorageWrapperAuthentication;
use Cargomart\ApiClient\Tests\fixtures\ClientFactory;
use Cargomart\ApiClient\Tests\fixtures\Responses;
use PHPUnit\Framework\TestCase;

class StorageWrapperAuthenticationTest extends TestCase
{
    public function testStorageReadError(): void
    {
        $storage = $this->createMock(MemorySessionStorage::class);
        $storage
            ->method('readToken')
            ->willThrowException(new SessionStorageException())
        ;

        $this->expectException(TokenInvalidException::class);
        $this->expectExceptionMessage('Ошибка чтения токена из данных сессий');

        $auth = $this->createStorageWrapper($storage);
        $auth->getToken();
    }

    public function testStorageClearError(): void
    {
        $storage = $this->createMock(MemorySessionStorage::class);
        $storage
            ->method('clearToken')
            ->willThrowException(new SessionStorageException())
        ;

        $client = ClientFactory::create([
            Responses::loginOkResponse(),
            Responses::loginBadResponse(),
        ]);

        $auth = $this->createStorageWrapper($storage);
        $auth->validateToken($client);

        $this->expectException(TokenInvalidException::class);
        $this->expectExceptionMessage('Ошибка очистки данных сессии');
        $auth->validateToken($client);
    }

    public function testStorageStoreError(): void
    {
        $storage = $this->createMock(MemorySessionStorage::class);
        $storage
            ->method('storeToken')
            ->willThrowException(new SessionStorageException())
        ;

        $client = ClientFactory::create([Responses::loginOkResponse()]);

        $auth = $this->createStorageWrapper($storage);

        $this->expectException(TokenInvalidException::class);
        $this->expectExceptionMessage('Ошибка сохранения данных в сессию');
        $auth->requestNewToken($client);
    }

    public function testStorage(): void
    {
        $storage = new MemorySessionStorage();

        $client = ClientFactory::create([
            Responses::loginOkResponse(),
            Responses::loginBadResponse(),
        ]);
        $auth = $this->createStorageWrapper($storage);
        $auth->requestNewToken($client);

        $auth = $this->createStorageWrapper($storage);
        self::assertTrue($auth->hasToken());
        try {
            $auth->validateToken($client);
        } catch (TokenInvalidException $e) {
            self::assertEquals('Невалидный токен', $e->getMessage());
        }

        $data = $storage->getData();
        self::assertEmpty($data);
    }

    /**
     * @param SessionStorageInterface $storage
     *
     * @return StorageWrapperAuthentication
     */
    private function createStorageWrapper(SessionStorageInterface $storage): StorageWrapperAuthentication
    {
        return new StorageWrapperAuthentication(new LoginPasswordAuthentication('login', 'password'), $storage);
    }
}
