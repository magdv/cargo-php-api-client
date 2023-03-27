<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: simple-document/responses/simple-document-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SimpleDocument\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Детали по подписанному документу заказа
 * source: simple-document/responses/simple-document-response.json
 *
 * @property MessageV2[] $message
 * @property SimpleDocumentResponseData $data
 */
final class SimpleDocumentResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\SimpleDocument\Responses\SimpleDocumentResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
