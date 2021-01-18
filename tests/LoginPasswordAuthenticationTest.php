<?php

declare(strict_types=1);

namespace Cargomart\ApiClient\Tests;

use Cargomart\ApiClient\Authentication\exceptions\LoginPasswordInvalidException;
use Cargomart\ApiClient\Authentication\exceptions\TokenInvalidException;
use Cargomart\ApiClient\Authentication\LoginPasswordAuthentication;
use Cargomart\ApiClient\Tests\fixtures\ClientFactory;
use Cargomart\ApiClient\Tests\fixtures\Responses;
use PHPUnit\Framework\TestCase;

class LoginPasswordAuthenticationTest extends TestCase
{
    public function testGetNoToken(): void
    {
        $auth = new LoginPasswordAuthentication('login', 'password');

        self::assertFalse($auth->hasToken());
        $this->expectException(TokenInvalidException::class);
        $this->expectExceptionMessage('Не задан токен');
        $auth->getToken();
    }

    public function testAcquireNewToken(): void
    {
        $auth = new LoginPasswordAuthentication('login', 'password');

        $client = ClientFactory::create([Responses::loginOkResponse()]);

        $auth->requestNewToken($client);
        self::assertTrue($auth->hasToken());
        self::assertEquals('1234567890', $auth->getToken());
    }

    public function testInvalidLogin(): void
    {
        $auth = new LoginPasswordAuthentication('login', 'password');

        $client = ClientFactory::create([Responses::loginBadResponse()]);

        $this->expectException(LoginPasswordInvalidException::class);
        $this->expectExceptionMessage('Неверный логин/пароль');
        $auth->requestNewToken($client);
    }

    public function testAcquireBadToken(): void
    {
        $auth = new LoginPasswordAuthentication('login', 'password');

        $client = ClientFactory::create([
            Responses::loginOkResponse(),
            Responses::loginOkResponse(),
            Responses::loginBadResponse(),
        ]);

        $auth->validateToken($client);
        $auth->validateToken($client);
        $this->expectException(TokenInvalidException::class);
        $this->expectExceptionMessage('Невалидный токен');
        $auth->validateToken($client);
    }
}
