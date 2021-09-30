<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\File\Clear;
use Cargomart\ApiClient\Builder\File\Id;

/**
 * url: /api/v2/file
 */
final class File extends AbstractBuilder
{
    protected const URL = '/api/v2/file';

    public function id(int $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function clear(): Clear
    {
        return new Clear($this->params, $this->client);
    }

    public function get(): FileGet
    {
        return new FileGet($this->client, $this->getUrl());
    }

    public function post(): FilePost
    {
        return new FilePost($this->client, $this->getUrl());
    }

    public function delete(): FileDelete
    {
        return new FileDelete($this->client, $this->getUrl());
    }
}
