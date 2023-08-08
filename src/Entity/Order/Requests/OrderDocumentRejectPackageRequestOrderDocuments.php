<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Решение по каждому документу
 * source: order/requests/order-document-reject-package-request.json#/properties/orderDocuments
 *
 * @property string $id
 * @property string $status
 * @property string $rejectReason
 */
final class OrderDocumentRejectPackageRequestOrderDocuments extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'status' => ['string'], 'rejectReason' => ['string']];
    protected static $nullables = ['id' => false, 'status' => false, 'rejectReason' => false];
}
