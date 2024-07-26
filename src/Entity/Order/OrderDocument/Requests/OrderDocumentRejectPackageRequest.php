<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\OrderDocument\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для запроса на отклонение пакета документов
 * source: order/OrderDocument/requests/order-document-reject-package-request.json
 *
 * @property string $rejectReason
 * @property OrderDocumentRejectPackageRequestOrderDocuments[] $orderDocuments
 */
final class OrderDocumentRejectPackageRequest extends AbstractEntity
{
    protected static $types = [
        'rejectReason' => ['string'],
        'orderDocuments' => [
            'array',
            'Cargomart\ApiClient\Entity\Order\OrderDocument\Requests\OrderDocumentRejectPackageRequestOrderDocuments',
        ],
    ];

    protected static $nullables = ['rejectReason' => false, 'orderDocuments' => false];
}
