<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ответ на валидацию черновика FTL
 * source: order/responses/order-draft-ftl-validate-response.json
 *
 * @property MessageV2[] $message
 */
final class OrderDraftFtlValidateResponse extends AbstractResponse
{
    protected static $types = ['message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2']];
    protected static $nullables = ['message' => false];
}
