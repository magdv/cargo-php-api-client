<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-document-package-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ с пакетом документов
 * source: order/responses/order-document-package-response.json
 *
 * @property MessageV2[] $message
 * @property OrderDocumentPackageResponseData $data
 */
final class OrderDocumentPackageResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Order\Responses\OrderDocumentPackageResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
