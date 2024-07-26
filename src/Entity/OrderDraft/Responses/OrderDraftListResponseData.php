<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\OrderDraft\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Base\Pagination;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch;
use Cargomart\ApiClient\Entity\Company\Objects\CompanyShort;
use Cargomart\ApiClient\Entity\Locality\Objects\Locality;
use Cargomart\ApiClient\Entity\OrderDraft\Objects\OrderDraft;
use Cargomart\ApiClient\Entity\User\Objects\UserContactShort;

/**
 * Данные списка черновиков
 * source: order-draft/responses/order-draft-list-response.json#/properties/data
 *
 * @property OrderDraft[] $orderDraft
 * @property Pagination $pagination
 * @property Locality[] $locality
 * @property CompanyShort[] $company
 * @property CompanyBranch[] $companyBranch
 * @property UserContactShort[] $contact
 */
final class OrderDraftListResponseData extends AbstractEntity
{
    protected static $types = [
        'orderDraft' => ['array', 'Cargomart\ApiClient\Entity\OrderDraft\Objects\OrderDraft'],
        'pagination' => ['Cargomart\ApiClient\Entity\Base\Pagination'],
        'locality' => ['array', 'Cargomart\ApiClient\Entity\Locality\Objects\Locality'],
        'company' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyShort'],
        'companyBranch' => ['array', 'Cargomart\ApiClient\Entity\Company\Objects\CompanyBranch'],
        'contact' => ['array', 'Cargomart\ApiClient\Entity\User\Objects\UserContactShort'],
    ];

    protected static $nullables = [
        'orderDraft' => false,
        'pagination' => false,
        'locality' => false,
        'company' => false,
        'companyBranch' => false,
        'contact' => false,
    ];
}
