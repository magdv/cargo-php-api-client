<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDocument\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * source: order/OrderDocument/requests/reject-document-request.json
 *
 * @property string $reason
 */
final class RejectDocumentRequest extends AbstractEntity
{
    protected static $types = ['reason' => ['string']];
    protected static $nullables = ['reason' => false];
}
