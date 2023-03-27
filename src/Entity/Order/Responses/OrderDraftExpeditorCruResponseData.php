<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-draft-expeditor-cru-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Order\Objects\OrderDraftExpeditorEditItem;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * Common response data
 * source: order/responses/order-draft-expeditor-cru-response.json#/properties/data
 *
 * @property OrderDraftExpeditorEditItem $orderDraftExpeditor
 * @property Locality[] $locality
 * @property CompanyShort[] $company
 * @property CompanyBranch[] $companyBranch
 * @property UserContactShort[] $contact
 */
final class OrderDraftExpeditorCruResponseData extends AbstractEntity
{
    protected static $types = [
        'orderDraftExpeditor' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDraftExpeditorEditItem'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'companyBranch' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
    ];

    protected static $nullables = [
        'orderDraftExpeditor' => false,
        'locality' => false,
        'company' => false,
        'companyBranch' => false,
        'contact' => false,
    ];
}
