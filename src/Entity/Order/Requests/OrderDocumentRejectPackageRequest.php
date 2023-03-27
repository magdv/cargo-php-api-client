<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/requests/order-document-reject-package-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для запроса на отклонение пакета документов
 * source: order/requests/order-document-reject-package-request.json
 *
 * @property string $rejectReason
 * @property OrderDocumentRejectPackageRequestOrderDocumentsItems[] $orderDocuments
 */
final class OrderDocumentRejectPackageRequest extends AbstractEntity
{
    protected static $types = [
        'rejectReason' => ['string'],
        'orderDocuments' => [
            'array',
            'Cargomart\ApiClient\Entity\Order\Requests\OrderDocumentRejectPackageRequestOrderDocumentsItems',
        ],
    ];

    protected static $nullables = ['rejectReason' => false, 'orderDocuments' => false];
}
