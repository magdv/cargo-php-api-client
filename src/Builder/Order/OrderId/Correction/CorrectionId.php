<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\Correction;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Order\OrderId\Correction\CorrectionId\History;

/**
 * url: /api/v2/order/{orderId}/correction/{correctionId}
 */
final class CorrectionId extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/correction/{correctionId}';

    public function history(): History
    {
        return new History($this->params, $this->client);
    }
}
