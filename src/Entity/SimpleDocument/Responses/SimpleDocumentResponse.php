<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SimpleDocument\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Детали по подписанному документу заказа
 * source: simple-document/responses/simple-document-response.json
 *
 * @property SimpleDocumentResponseData $data
 */
final class SimpleDocumentResponse extends AbstractResponse
{
    protected static $types = [
        'data' => ['Cargomart\ApiClient\Entity\SimpleDocument\Responses\SimpleDocumentResponseData'],
    ];

    protected static $nullables = ['data' => false];
}
