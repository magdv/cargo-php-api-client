<?php

declare(strict_types=1);

namespace Cargomart\ApiClient\Tests;

use Cargomart\ApiClient\Authentication\FileSessionStorage;
use org\bovigo\vfs\vfsStream;
use PHPUnit\Framework\TestCase;

class FileSessionStorageTest extends TestCase
{
    private const KEY = 'some-key';

    public function testSaveLoad(): void
    {
        //['valid.session' => serialize([self::KEY => '123'])]

        $fs = vfsStream::setup();

        $storage = new FileSessionStorage($fs->url() . '/valid.session');

        $token = $storage->readToken(self::KEY);
        self::assertNull($token);

        $newToken = bin2hex(random_bytes(32));
        $storage->storeToken(self::KEY, $newToken);

        $token = $storage->readToken(self::KEY);
        self::assertEquals($newToken, $token);

        $storage = new FileSessionStorage($fs->url() . '/valid.session');
        $token = $storage->readToken(self::KEY);
        self::assertEquals($newToken, $token);

        $storage->clearToken(self::KEY);
        $token = $storage->readToken(self::KEY);
        self::assertNull($token);

        $storage = new FileSessionStorage($fs->url() . '/valid.session');
        $token = $storage->readToken(self::KEY);
        self::assertNull($token);
    }

    public function testInvalidFail(): void
    {
        $fs = vfsStream::setup('root', null, ['invalid.session' => 'qwe']);

        $storage = new FileSessionStorage($fs->url() . '/invalid.session');

        $token = $storage->readToken(self::KEY);
        self::assertNull($token);
    }
}
