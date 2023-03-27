<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: order/responses/order-edit-response.json#/properties/data
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\GeneralPartner\Objects\GeneralPartnerContract;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\Order\Objects\OrderEditItem;
use Cargomart\ApiClient\Entity\Order\Objects\ProgressItem;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\ContactItem;
use Cargomart\ApiClient\Entity\StoragePoint\Objects\PointItem;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * Common response data
 * source: order/responses/order-edit-response.json#/properties/data
 *
 * @property OrderEditItem $order
 * @property ProgressItem[] $progress
 * @property PointItem[] $storagePoint
 * @property ContactItem[] $storagePointContact
 * @property Locality[] $locality
 * @property CompanyShort[] $company
 * @property CompanyBranch[] $companyBranch
 * @property UserContactShort[] $contact
 * @property GeneralPartnerContract[] $generalPartnerContract
 */
final class OrderEditResponseData extends AbstractEntity
{
    protected static $types = [
        'order' => ['Cargomart\ApiClient\Entity\Order\Objects\OrderEditItem'],
        'progress' => ['array', 'Cargomart\ApiClient\Entity\Order\Objects\ProgressItem'],
        'storagePoint' => ['array', 'Cargomart\ApiClient\Entity\StoragePoint\Objects\PointItem'],
        'storagePointContact' => ['array', 'Cargomart\ApiClient\Entity\StoragePoint\Objects\ContactItem'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'companyBranch' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
        'generalPartnerContract' => ['array', 'Cargomart\ApiClient\Entity\GeneralPartner\Objects\GeneralPartnerContract'],
    ];

    protected static $nullables = [
        'order' => false,
        'progress' => false,
        'storagePoint' => false,
        'storagePointContact' => false,
        'locality' => false,
        'company' => false,
        'companyBranch' => false,
        'contact' => false,
        'generalPartnerContract' => false,
    ];
}
