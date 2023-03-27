<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/ac/point-contacts
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\Ac;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/ac/point-contacts
 */
final class PointContacts extends AbstractBuilder
{
    protected const URL = '/api/v2/order/ac/point-contacts';

    public function get(): PointContactsGet
    {
        return new PointContactsGet($this->client, $this->getUrl());
    }
}
