<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\CompanyConfirmation;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\CompanyConfirmation\Document\Id;
use Cargomart\ApiClient\Builder\CompanyConfirmation\Document\Send;

/**
 * url: /api/v2/company-confirmation/document
 */
final class Document extends AbstractBuilder
{
    protected const URL = '/api/v2/company-confirmation/document';

    public function id(string $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function send(): Send
    {
        return new Send($this->params, $this->client);
    }

    public function post(): DocumentPost
    {
        return new DocumentPost($this->client, $this->getUrl());
    }
}
