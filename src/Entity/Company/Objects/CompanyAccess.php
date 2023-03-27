<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/objects/company-access.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Права доступа к компании
 * source: company/objects/company-access.json
 *
 * @property bool $view
 * @property bool $update
 * @property bool $truckList
 * @property bool $documentView
 * @property bool $createContractType
 * @property bool $updateContractType
 * @property bool $listContractType
 * @property bool $viewContractType
 * @property bool $partnerSend
 * @property bool $partnerAccept
 * @property bool $partnerReject
 * @property bool $partnerDelete
 * @property bool $partnerContractCreate
 * @property bool $partnerContractUpdate
 * @property bool $partnerConditionsView
 * @property bool $partnerConditionsUpdate
 * @property bool $createDisabled
 * @property bool $deleteDisabled
 * @property bool $konturReportView
 * @property bool $infoCarrierView
 * @property bool $infoConsignorView
 * @property bool $viewCarriageDirection
 * @property bool $viewCarriageRegion
 * @property bool $viewRequirement
 * @property bool $viewCarPark
 * @property bool $viewSettings
 * @property bool $updateSettings
 * @property bool $viewLogo
 * @property bool $createLogo
 * @property bool $deleteLogo
 * @property bool $createReview
 * @property bool $viewReview
 * @property bool $viewCommunicationContacts
 * @property bool $editCommunicationContacts
 */
final class CompanyAccess extends AbstractEntity
{
    protected static $types = [
        'view' => ['bool'],
        'update' => ['bool'],
        'truckList' => ['bool'],
        'documentView' => ['bool'],
        'createContractType' => ['bool'],
        'updateContractType' => ['bool'],
        'listContractType' => ['bool'],
        'viewContractType' => ['bool'],
        'partnerSend' => ['bool'],
        'partnerAccept' => ['bool'],
        'partnerReject' => ['bool'],
        'partnerDelete' => ['bool'],
        'partnerContractCreate' => ['bool'],
        'partnerContractUpdate' => ['bool'],
        'partnerConditionsView' => ['bool'],
        'partnerConditionsUpdate' => ['bool'],
        'createDisabled' => ['bool'],
        'deleteDisabled' => ['bool'],
        'konturReportView' => ['bool'],
        'infoCarrierView' => ['bool'],
        'infoConsignorView' => ['bool'],
        'viewCarriageDirection' => ['bool'],
        'viewCarriageRegion' => ['bool'],
        'viewRequirement' => ['bool'],
        'viewCarPark' => ['bool'],
        'viewSettings' => ['bool'],
        'updateSettings' => ['bool'],
        'viewLogo' => ['bool'],
        'createLogo' => ['bool'],
        'deleteLogo' => ['bool'],
        'createReview' => ['bool'],
        'viewReview' => ['bool'],
        'viewCommunicationContacts' => ['bool'],
        'editCommunicationContacts' => ['bool'],
    ];

    protected static $nullables = [
        'view' => false,
        'update' => false,
        'truckList' => false,
        'documentView' => false,
        'createContractType' => false,
        'updateContractType' => false,
        'listContractType' => false,
        'viewContractType' => false,
        'partnerSend' => false,
        'partnerAccept' => false,
        'partnerReject' => false,
        'partnerDelete' => false,
        'partnerContractCreate' => false,
        'partnerContractUpdate' => false,
        'partnerConditionsView' => false,
        'partnerConditionsUpdate' => false,
        'createDisabled' => false,
        'deleteDisabled' => false,
        'konturReportView' => false,
        'infoCarrierView' => false,
        'infoConsignorView' => false,
        'viewCarriageDirection' => false,
        'viewCarriageRegion' => false,
        'viewRequirement' => false,
        'viewCarPark' => false,
        'viewSettings' => false,
        'updateSettings' => false,
        'viewLogo' => false,
        'createLogo' => false,
        'deleteLogo' => false,
        'createReview' => false,
        'viewReview' => false,
        'viewCommunicationContacts' => false,
        'editCommunicationContacts' => false,
    ];
}
