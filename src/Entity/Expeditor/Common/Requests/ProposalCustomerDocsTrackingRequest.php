<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Common\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для создания запроса на добавление трек-номера отслеживания отправления с документами для заказчика
 * source: expeditor/Common/requests/proposal-customer-docs-tracking-request.json
 *
 * @property string $trackingNumber
 * @property string $departureDate
 * @property string $postServiceName
 */
final class ProposalCustomerDocsTrackingRequest extends AbstractEntity
{
    protected static $types = [
        'trackingNumber' => ['string'],
        'departureDate' => ['string'],
        'postServiceName' => ['string'],
    ];

    protected static $nullables = ['trackingNumber' => false, 'departureDate' => false, 'postServiceName' => false];
}
