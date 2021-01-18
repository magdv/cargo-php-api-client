<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Manage\PreOrder;
use Cargomart\ApiClient\Builder\Manage\PreOrderGroup;
use Cargomart\ApiClient\Builder\Manage\PreOrderTemplate;

/**
 * url: /api/v2/manage
 */
final class Manage extends AbstractBuilder
{
    protected const URL = '/api/v2/manage';

    public function preOrderGroup(): PreOrderGroup
    {
        return new PreOrderGroup($this->params, $this->client);
    }

    public function preOrderTemplate(): PreOrderTemplate
    {
        return new PreOrderTemplate($this->params, $this->client);
    }

    public function preOrder(): PreOrder
    {
        return new PreOrder($this->params, $this->client);
    }
}
