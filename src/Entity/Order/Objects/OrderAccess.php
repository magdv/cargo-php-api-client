<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Order\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Описание доступов к заказу
 * source: order/objects/order-access.json
 *
 * @property bool $clone
 * @property bool $template
 * @property bool $edit
 * @property bool $update
 * @property bool $delete
 * @property bool $point
 * @property bool $pointSwap
 * @property bool $updateClientAccess
 * @property bool $deleteClientAccess
 * @property bool $viewClientAccess
 * @property bool $updateContact
 * @property bool $deleteContact
 * @property bool $viewContact
 * @property bool $updateTag
 * @property bool $viewTag
 * @property bool $validate
 * @property bool $publish
 * @property bool $view
 * @property bool $createFavorite
 * @property bool $deleteFavorite
 * @property bool $createPin
 * @property bool $deletePin
 * @property bool $bidLast
 * @property bool $viewBid
 * @property bool $createBid
 * @property bool $createCarrierRefuse
 * @property bool $createConsignorRefuse
 * @property bool $createRefuseAppeal
 * @property bool $createRefuseCancel
 * @property bool $proposal
 * @property bool $proxyConsignorCarrier
 * @property bool $proxyConsignorCarrierWithFacsimile
 * @property bool $proxyTemplate
 * @property bool $createProxy
 * @property bool $viewProxy
 * @property bool $createDocument
 * @property bool $viewDocument
 * @property bool $viewRate
 * @property bool $updateRate
 * @property bool $cancel
 * @property bool $useBroker
 * @property bool $updateTruckDriver
 * @property bool $createComment
 * @property bool $viewComment
 * @property bool $createModeration
 * @property bool $deleteModeration
 * @property bool $createModerationReject
 * @property bool $createModerationApprove
 * @property bool $createGeneralPartnerDocument
 * @property bool $createGeneralPartnerTemplateApprove
 * @property bool $viewGeneralPartnerProxyTemplate
 * @property bool $viewGeneralPartnerProposalTemplate
 * @property bool $createRepeat
 * @property bool $viewPin
 * @property bool $viewVisitor
 * @property bool $viewMonitoring
 * @property bool $createMonitoring
 * @property bool $createChatConsignor
 * @property bool $createChatWinner
 * @property bool $viewChat
 * @property bool $viewQualityScore
 * @property bool $createQualityScore
 * @property bool $createQualityScorePotential
 * @property bool $viewAlter
 * @property bool $updateAlter
 * @property bool $viewOffer
 * @property bool $createOffer
 * @property bool $viewOfferExcel
 * @property bool $createCorrectionValidate
 * @property bool $createCorrection
 * @property bool $viewCorrection
 * @property bool $deleteCorrection
 * @property bool $createCorrectionReject
 * @property bool $createCorrectionApprove
 * @property bool $viewCorrectionHistory
 * @property bool $createConsignorDocument
 * @property bool $viewConsignorDocument
 * @property bool $createTruckDriverCorrection
 * @property bool $viewTruckDriverCorrection
 * @property bool $deleteTruckDriverCorrection
 * @property bool $createTruckDriverCorrectionReject
 * @property bool $createTruckDriverCorrectionApprove
 * @property bool $updateCarrierContacts
 * @property bool $createFinishing
 * @property bool $updateInvoiceGpCarrier
 * @property bool $viewInvoiceGpCarrier
 * @property bool $viewClientList
 * @property bool $waybillView
 * @property bool $waybillGpView
 * @property bool $updateProxyConsignorCarrierAdditionalInfo
 * @property bool $viewProxyConsignorCarrierAdditionalInfo
 * @property bool $viewDownloadExpeditorAssignment
 */
final class OrderAccess extends AbstractEntity
{
    protected static $types = [
        'clone' => ['bool'],
        'template' => ['bool'],
        'edit' => ['bool'],
        'update' => ['bool'],
        'delete' => ['bool'],
        'point' => ['bool'],
        'pointSwap' => ['bool'],
        'updateClientAccess' => ['bool'],
        'deleteClientAccess' => ['bool'],
        'viewClientAccess' => ['bool'],
        'updateContact' => ['bool'],
        'deleteContact' => ['bool'],
        'viewContact' => ['bool'],
        'updateTag' => ['bool'],
        'viewTag' => ['bool'],
        'validate' => ['bool'],
        'publish' => ['bool'],
        'view' => ['bool'],
        'createFavorite' => ['bool'],
        'deleteFavorite' => ['bool'],
        'createPin' => ['bool'],
        'deletePin' => ['bool'],
        'bidLast' => ['bool'],
        'viewBid' => ['bool'],
        'createBid' => ['bool'],
        'createCarrierRefuse' => ['bool'],
        'createConsignorRefuse' => ['bool'],
        'createRefuseAppeal' => ['bool'],
        'createRefuseCancel' => ['bool'],
        'proposal' => ['bool'],
        'proxyConsignorCarrier' => ['bool'],
        'proxyConsignorCarrierWithFacsimile' => ['bool'],
        'proxyTemplate' => ['bool'],
        'createProxy' => ['bool'],
        'viewProxy' => ['bool'],
        'createDocument' => ['bool'],
        'viewDocument' => ['bool'],
        'viewRate' => ['bool'],
        'updateRate' => ['bool'],
        'cancel' => ['bool'],
        'useBroker' => ['bool'],
        'updateTruckDriver' => ['bool'],
        'createComment' => ['bool'],
        'viewComment' => ['bool'],
        'createModeration' => ['bool'],
        'deleteModeration' => ['bool'],
        'createModerationReject' => ['bool'],
        'createModerationApprove' => ['bool'],
        'createGeneralPartnerDocument' => ['bool'],
        'createGeneralPartnerTemplateApprove' => ['bool'],
        'viewGeneralPartnerProxyTemplate' => ['bool'],
        'viewGeneralPartnerProposalTemplate' => ['bool'],
        'createRepeat' => ['bool'],
        'viewPin' => ['bool'],
        'viewVisitor' => ['bool'],
        'viewMonitoring' => ['bool'],
        'createMonitoring' => ['bool'],
        'createChatConsignor' => ['bool'],
        'createChatWinner' => ['bool'],
        'viewChat' => ['bool'],
        'viewQualityScore' => ['bool'],
        'createQualityScore' => ['bool'],
        'createQualityScorePotential' => ['bool'],
        'viewAlter' => ['bool'],
        'updateAlter' => ['bool'],
        'viewOffer' => ['bool'],
        'createOffer' => ['bool'],
        'viewOfferExcel' => ['bool'],
        'createCorrectionValidate' => ['bool'],
        'createCorrection' => ['bool'],
        'viewCorrection' => ['bool'],
        'deleteCorrection' => ['bool'],
        'createCorrectionReject' => ['bool'],
        'createCorrectionApprove' => ['bool'],
        'viewCorrectionHistory' => ['bool'],
        'createConsignorDocument' => ['bool'],
        'viewConsignorDocument' => ['bool'],
        'createTruckDriverCorrection' => ['bool'],
        'viewTruckDriverCorrection' => ['bool'],
        'deleteTruckDriverCorrection' => ['bool'],
        'createTruckDriverCorrectionReject' => ['bool'],
        'createTruckDriverCorrectionApprove' => ['bool'],
        'updateCarrierContacts' => ['bool'],
        'createFinishing' => ['bool'],
        'updateInvoiceGpCarrier' => ['bool'],
        'viewInvoiceGpCarrier' => ['bool'],
        'viewClientList' => ['bool'],
        'waybillView' => ['bool'],
        'waybillGpView' => ['bool'],
        'updateProxyConsignorCarrierAdditionalInfo' => ['bool'],
        'viewProxyConsignorCarrierAdditionalInfo' => ['bool'],
        'viewDownloadExpeditorAssignment' => ['bool'],
    ];

    protected static $nullables = [
        'clone' => false,
        'template' => false,
        'edit' => false,
        'update' => false,
        'delete' => false,
        'point' => false,
        'pointSwap' => false,
        'updateClientAccess' => false,
        'deleteClientAccess' => false,
        'viewClientAccess' => false,
        'updateContact' => false,
        'deleteContact' => false,
        'viewContact' => false,
        'updateTag' => false,
        'viewTag' => false,
        'validate' => false,
        'publish' => false,
        'view' => false,
        'createFavorite' => false,
        'deleteFavorite' => false,
        'createPin' => false,
        'deletePin' => false,
        'bidLast' => false,
        'viewBid' => false,
        'createBid' => false,
        'createCarrierRefuse' => false,
        'createConsignorRefuse' => false,
        'createRefuseAppeal' => false,
        'createRefuseCancel' => false,
        'proposal' => false,
        'proxyConsignorCarrier' => false,
        'proxyConsignorCarrierWithFacsimile' => false,
        'proxyTemplate' => false,
        'createProxy' => false,
        'viewProxy' => false,
        'createDocument' => false,
        'viewDocument' => false,
        'viewRate' => false,
        'updateRate' => false,
        'cancel' => false,
        'useBroker' => false,
        'updateTruckDriver' => false,
        'createComment' => false,
        'viewComment' => false,
        'createModeration' => false,
        'deleteModeration' => false,
        'createModerationReject' => false,
        'createModerationApprove' => false,
        'createGeneralPartnerDocument' => false,
        'createGeneralPartnerTemplateApprove' => false,
        'viewGeneralPartnerProxyTemplate' => false,
        'viewGeneralPartnerProposalTemplate' => false,
        'createRepeat' => false,
        'viewPin' => false,
        'viewVisitor' => false,
        'viewMonitoring' => false,
        'createMonitoring' => false,
        'createChatConsignor' => false,
        'createChatWinner' => false,
        'viewChat' => false,
        'viewQualityScore' => false,
        'createQualityScore' => false,
        'createQualityScorePotential' => false,
        'viewAlter' => false,
        'updateAlter' => false,
        'viewOffer' => false,
        'createOffer' => false,
        'viewOfferExcel' => false,
        'createCorrectionValidate' => false,
        'createCorrection' => false,
        'viewCorrection' => false,
        'deleteCorrection' => false,
        'createCorrectionReject' => false,
        'createCorrectionApprove' => false,
        'viewCorrectionHistory' => false,
        'createConsignorDocument' => false,
        'viewConsignorDocument' => false,
        'createTruckDriverCorrection' => false,
        'viewTruckDriverCorrection' => false,
        'deleteTruckDriverCorrection' => false,
        'createTruckDriverCorrectionReject' => false,
        'createTruckDriverCorrectionApprove' => false,
        'updateCarrierContacts' => false,
        'createFinishing' => false,
        'updateInvoiceGpCarrier' => false,
        'viewInvoiceGpCarrier' => false,
        'viewClientList' => false,
        'waybillView' => false,
        'waybillGpView' => false,
        'updateProxyConsignorCarrierAdditionalInfo' => false,
        'viewProxyConsignorCarrierAdditionalInfo' => false,
        'viewDownloadExpeditorAssignment' => false,
    ];
}
