<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ответ с пакетом документов
 * source: order/responses/order-document-package-response.json
 *
 * @property OrderDocumentPackageResponseData $data
 */
final class OrderDocumentPackageResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderDocumentPackageResponseData']];
    protected static $nullables = ['data' => false];
}
