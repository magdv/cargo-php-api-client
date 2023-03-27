<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/expeditor-proposal/{id}/chat
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/expeditor-proposal/{id}/chat
 */
final class Chat extends AbstractBuilder
{
    protected const URL = '/api/v2/expeditor-proposal/{id}/chat';

    public function get(): ChatGet
    {
        return new ChatGet($this->client, $this->getUrl());
    }
}
