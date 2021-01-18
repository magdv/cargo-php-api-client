<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\GeneralPartner\Objects\GeneralPartnerContract;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Order\Objects\OrderContactItem;
use Cargomart\ApiClient\Entity\Order\Objects\OrderDraftFtlEditItem;

/**
 * Common response data
 * source: order/responses/order-draft-ftl-response.json#/properties/data
 *
 * @property OrderDraftFtlEditItem $draft
 * @property Locality[] $locality
 * @property CompanyShort[] $company
 * @property CompanyBranch[] $companyBranch
 * @property OrderContactItem[] $contact
 * @property GeneralPartnerContract[] $generalPartnerContract
 */
final class OrderDraftFtlResponseData extends AbstractEntity
{
    protected static $types = [
        'draft' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderDraftFtlEditItem'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'companyBranch' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\OrderContactItem'],
        'generalPartnerContract' => ['array', 'Cargomart\ApiClient\Entity\GeneralPartner\Objects\GeneralPartnerContract'],
    ];

    protected static $nullables = [
        'draft' => false,
        'locality' => false,
        'company' => false,
        'companyBranch' => false,
        'contact' => false,
        'generalPartnerContract' => false,
    ];
}
