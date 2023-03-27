<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-draft-ftl-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Order\Objects\OrderDraftFtlEditItem;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * Common response data
 * source: order/responses/order-draft-ftl-response.json#/properties/data
 *
 * @property OrderDraftFtlEditItem $orderDraftFtl
 * @property Locality[] $locality
 * @property CompanyShort[] $company
 * @property CompanyBranch[] $companyBranch
 * @property UserContactShort[] $contact
 */
final class OrderDraftFtlResponseData extends AbstractEntity
{
    protected static $types = [
        'orderDraftFtl' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDraftFtlEditItem'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'companyBranch' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
    ];

    protected static $nullables = [
        'orderDraftFtl' => false,
        'locality' => false,
        'company' => false,
        'companyBranch' => false,
        'contact' => false,
    ];
}
