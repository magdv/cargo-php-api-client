<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к заказу экспедитора
 * source: expeditor/objects/proposal-access.json
 *
 * @property bool $view
 * @property bool $viewCarrierDocumentTrackingNumber
 * @property bool $viewChat
 * @property bool $createPatch
 * @property bool $createCarrierRefuse
 * @property bool $createRefuse
 * @property bool $viewSimpleDocument
 * @property bool $viewItinerary
 * @property bool $viewVisitorList
 * @property bool $viewPinList
 * @property bool $viewDownloadExpeditorAssignment
 * @property bool $viewDownloadRequestAssignment
 * @property bool $waybillView
 * @property bool $waybillEdit
 * @property bool $viewEcnList
 * @property bool $viewCarrierPayment
 * @property bool $updateCarrierPayment
 * @property bool $viewOffer
 * @property bool $viewCarrierAskList
 * @property bool $viewBidList
 * @property bool $viewConsignorExpeditorPayment
 * @property bool $updateConsignorExpeditorPayment
 * @property bool $createCustomerDocsTracking
 */
final class ProposalAccess extends AbstractEntity
{
    protected static $types = [
        'view' => ['bool'],
        'viewCarrierDocumentTrackingNumber' => ['bool'],
        'viewChat' => ['bool'],
        'createPatch' => ['bool'],
        'createCarrierRefuse' => ['bool'],
        'createRefuse' => ['bool'],
        'viewSimpleDocument' => ['bool'],
        'viewItinerary' => ['bool'],
        'viewVisitorList' => ['bool'],
        'viewPinList' => ['bool'],
        'viewDownloadExpeditorAssignment' => ['bool'],
        'viewDownloadRequestAssignment' => ['bool'],
        'waybillView' => ['bool'],
        'waybillEdit' => ['bool'],
        'viewEcnList' => ['bool'],
        'viewCarrierPayment' => ['bool'],
        'updateCarrierPayment' => ['bool'],
        'viewOffer' => ['bool'],
        'viewCarrierAskList' => ['bool'],
        'viewBidList' => ['bool'],
        'viewConsignorExpeditorPayment' => ['bool'],
        'updateConsignorExpeditorPayment' => ['bool'],
        'createCustomerDocsTracking' => ['bool'],
    ];

    protected static $nullables = [
        'view' => false,
        'viewCarrierDocumentTrackingNumber' => false,
        'viewChat' => false,
        'createPatch' => false,
        'createCarrierRefuse' => false,
        'createRefuse' => false,
        'viewSimpleDocument' => false,
        'viewItinerary' => false,
        'viewVisitorList' => false,
        'viewPinList' => false,
        'viewDownloadExpeditorAssignment' => false,
        'viewDownloadRequestAssignment' => false,
        'waybillView' => false,
        'waybillEdit' => false,
        'viewEcnList' => false,
        'viewCarrierPayment' => false,
        'updateCarrierPayment' => false,
        'viewOffer' => false,
        'viewCarrierAskList' => false,
        'viewBidList' => false,
        'viewConsignorExpeditorPayment' => false,
        'updateConsignorExpeditorPayment' => false,
        'createCustomerDocsTracking' => false,
    ];
}
