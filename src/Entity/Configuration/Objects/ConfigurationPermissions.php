<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Configuration\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Доступный UI
 * source: configuration/objects/configuration-permissions.json
 *
 * @property bool $viewMessages
 * @property bool $viewCompanySelfBranch
 * @property bool $viewCompanyConfirmation
 * @property bool $viewUserSelfProfile
 * @property bool $viewUserSelfSettings
 * @property bool $viewCompanySelfProfile
 * @property bool $viewCompanies
 * @property bool $viewCompanyCarrierList
 * @property bool $viewCompanyConsignorList
 * @property bool $viewPartnerContractType
 * @property bool $viewPartnerContractTypeList
 * @property bool $createPartnerContractType
 * @property bool $viewPartners
 * @property bool $viewCompanyPartnerList
 * @property bool $viewCompanyPartnerInvitationList
 * @property bool $viewCompanyBlacklist
 * @property bool $viewWorkers
 * @property bool $viewWorkerList
 * @property bool $viewWorkerCandidateList
 * @property bool $createWorker
 * @property bool $viewStoragePoints
 * @property bool $viewStoragePointList
 * @property bool $createStoragePoint
 * @property bool $viewTrucks
 * @property bool $viewTruckList
 * @property bool $createTruck
 * @property bool $viewDrivers
 * @property bool $viewDriverList
 * @property bool $createDriver
 * @property bool $viewDriverAppDetail
 * @property bool $createDriverAppInvite
 * @property bool $viewOrderTrackingList
 * @property bool $createOrderTracking
 * @property bool $viewProfileDocuments
 * @property bool $viewProfileDocumentList
 * @property bool $createProfileDocument
 * @property bool $viewOrders
 * @property bool $viewConsignorShippingWorkingList
 * @property bool $viewConsignorShippingArchivedList
 * @property bool $viewConsignorShipping
 * @property bool $viewConsignorOrders
 * @property bool $viewCarrierOrders
 * @property bool $viewGeneralPartnerOrders
 * @property bool $viewOrderCarrierListBidding
 * @property bool $viewOrderCarrierListMarked
 * @property bool $viewOrderCarrierListOffer
 * @property bool $viewOrderCarrierListWorking
 * @property bool $viewOrderCarrierListCompleted
 * @property bool $viewOrderCarrierListArchived
 * @property bool $viewOrderConsignorListBidding
 * @property bool $viewOrderConsignorListBiddingAll
 * @property bool $viewOrderConsignorListDraft
 * @property bool $viewOrderConsignorListModeration
 * @property bool $viewOrderConsignorListOffer
 * @property bool $viewOrderConsignorListWorking
 * @property bool $viewOrderConsignorListCompleted
 * @property bool $viewOrderConsignorListArchived
 * @property bool $viewOrderExpeditorListArchived
 * @property bool $viewOrderGeneralPartnerListBidding
 * @property bool $viewOrderGeneralPartnerListCorrectionRequest
 * @property bool $viewOrderGeneralPartnerListModerate
 * @property bool $viewOrderGeneralPartnerListWorking
 * @property bool $viewOrderGeneralPartnerListArchived
 * @property bool $viewOrderShowcase
 * @property bool $viewOrderCreateButton
 * @property bool $createOrderDraftFtl
 * @property bool $createOrderDraft
 * @property bool $createOrderDraftDirect
 * @property bool $createOrderDraftProject
 * @property bool $createOrderDraftFtlGp
 * @property bool $createOrderDraftOffer
 * @property bool $viewExpeditorProposals
 * @property bool $viewExpeditorProposalProxySignList
 * @property bool $viewExpeditorProposalWorkingList
 * @property bool $viewExpeditorProposalArchiveList
 * @property bool $viewExpeditorProposalCorrectionList
 * @property bool $createOrderExpeditorProposal
 * @property bool $createOrderExpeditorProposalFixedPriceExpress
 * @property bool $createOrderExpeditorProposalFixedPriceAuction
 * @property bool $importOrders
 * @property bool $exportOrders
 * @property bool $exportOrderOffers
 * @property bool $viewOrderBroker
 * @property bool $viewTenders
 * @property bool $viewTenderCarrierPriceRequestLotList
 * @property bool $viewTenderCarrierCompletedPriceRequestLotList
 * @property bool $viewTenderConsignorDraftList
 * @property bool $viewTenderConsignorPriceRequestList
 * @property bool $viewTenderConsignorCompletedList
 * @property bool $createTenderDraft
 * @property bool $viewAdmin
 * @property bool $viewBookingShowcase
 * @property bool $viewLandingExpress
 * @property bool $viewLandingForCarrier
 * @property bool $viewLandingForConsignor
 * @property bool $createPriceLocal
 * @property bool $viewPriceLocalList
 * @property bool $createPriceLocalPool
 * @property bool $viewPriceLocalPoolList
 * @property bool $viewStoragePointEmails
 * @property bool $updateStoragePointEmails
 * @property bool $updateStoragePointEdmParam
 * @property bool $viewDiadocBoxIdList
 * @property bool $viewContractList
 * @property bool $viewContractConclusion
 * @property bool $viewMainSearch
 * @property bool $orderMultiCurrencyParam
 */
final class ConfigurationPermissions extends AbstractEntity
{
    protected static $types = [
        'viewMessages' => ['bool'],
        'viewCompanySelfBranch' => ['bool'],
        'viewCompanyConfirmation' => ['bool'],
        'viewUserSelfProfile' => ['bool'],
        'viewUserSelfSettings' => ['bool'],
        'viewCompanySelfProfile' => ['bool'],
        'viewCompanies' => ['bool'],
        'viewCompanyCarrierList' => ['bool'],
        'viewCompanyConsignorList' => ['bool'],
        'viewPartnerContractType' => ['bool'],
        'viewPartnerContractTypeList' => ['bool'],
        'createPartnerContractType' => ['bool'],
        'viewPartners' => ['bool'],
        'viewCompanyPartnerList' => ['bool'],
        'viewCompanyPartnerInvitationList' => ['bool'],
        'viewCompanyBlacklist' => ['bool'],
        'viewWorkers' => ['bool'],
        'viewWorkerList' => ['bool'],
        'viewWorkerCandidateList' => ['bool'],
        'createWorker' => ['bool'],
        'viewStoragePoints' => ['bool'],
        'viewStoragePointList' => ['bool'],
        'createStoragePoint' => ['bool'],
        'viewTrucks' => ['bool'],
        'viewTruckList' => ['bool'],
        'createTruck' => ['bool'],
        'viewDrivers' => ['bool'],
        'viewDriverList' => ['bool'],
        'createDriver' => ['bool'],
        'viewDriverAppDetail' => ['bool'],
        'createDriverAppInvite' => ['bool'],
        'viewOrderTrackingList' => ['bool'],
        'createOrderTracking' => ['bool'],
        'viewProfileDocuments' => ['bool'],
        'viewProfileDocumentList' => ['bool'],
        'createProfileDocument' => ['bool'],
        'viewOrders' => ['bool'],
        'viewConsignorShippingWorkingList' => ['bool'],
        'viewConsignorShippingArchivedList' => ['bool'],
        'viewConsignorShipping' => ['bool'],
        'viewConsignorOrders' => ['bool'],
        'viewCarrierOrders' => ['bool'],
        'viewGeneralPartnerOrders' => ['bool'],
        'viewOrderCarrierListBidding' => ['bool'],
        'viewOrderCarrierListMarked' => ['bool'],
        'viewOrderCarrierListOffer' => ['bool'],
        'viewOrderCarrierListWorking' => ['bool'],
        'viewOrderCarrierListCompleted' => ['bool'],
        'viewOrderCarrierListArchived' => ['bool'],
        'viewOrderConsignorListBidding' => ['bool'],
        'viewOrderConsignorListBiddingAll' => ['bool'],
        'viewOrderConsignorListDraft' => ['bool'],
        'viewOrderConsignorListModeration' => ['bool'],
        'viewOrderConsignorListOffer' => ['bool'],
        'viewOrderConsignorListWorking' => ['bool'],
        'viewOrderConsignorListCompleted' => ['bool'],
        'viewOrderConsignorListArchived' => ['bool'],
        'viewOrderExpeditorListArchived' => ['bool'],
        'viewOrderGeneralPartnerListBidding' => ['bool'],
        'viewOrderGeneralPartnerListCorrectionRequest' => ['bool'],
        'viewOrderGeneralPartnerListModerate' => ['bool'],
        'viewOrderGeneralPartnerListWorking' => ['bool'],
        'viewOrderGeneralPartnerListArchived' => ['bool'],
        'viewOrderShowcase' => ['bool'],
        'viewOrderCreateButton' => ['bool'],
        'createOrderDraftFtl' => ['bool'],
        'createOrderDraft' => ['bool'],
        'createOrderDraftDirect' => ['bool'],
        'createOrderDraftProject' => ['bool'],
        'createOrderDraftFtlGp' => ['bool'],
        'createOrderDraftOffer' => ['bool'],
        'viewExpeditorProposals' => ['bool'],
        'viewExpeditorProposalProxySignList' => ['bool'],
        'viewExpeditorProposalWorkingList' => ['bool'],
        'viewExpeditorProposalArchiveList' => ['bool'],
        'viewExpeditorProposalCorrectionList' => ['bool'],
        'createOrderExpeditorProposal' => ['bool'],
        'createOrderExpeditorProposalFixedPriceExpress' => ['bool'],
        'createOrderExpeditorProposalFixedPriceAuction' => ['bool'],
        'importOrders' => ['bool'],
        'exportOrders' => ['bool'],
        'exportOrderOffers' => ['bool'],
        'viewOrderBroker' => ['bool'],
        'viewTenders' => ['bool'],
        'viewTenderCarrierPriceRequestLotList' => ['bool'],
        'viewTenderCarrierCompletedPriceRequestLotList' => ['bool'],
        'viewTenderConsignorDraftList' => ['bool'],
        'viewTenderConsignorPriceRequestList' => ['bool'],
        'viewTenderConsignorCompletedList' => ['bool'],
        'createTenderDraft' => ['bool'],
        'viewAdmin' => ['bool'],
        'viewBookingShowcase' => ['bool'],
        'viewLandingExpress' => ['bool'],
        'viewLandingForCarrier' => ['bool'],
        'viewLandingForConsignor' => ['bool'],
        'createPriceLocal' => ['bool'],
        'viewPriceLocalList' => ['bool'],
        'createPriceLocalPool' => ['bool'],
        'viewPriceLocalPoolList' => ['bool'],
        'viewStoragePointEmails' => ['bool'],
        'updateStoragePointEmails' => ['bool'],
        'updateStoragePointEdmParam' => ['bool'],
        'viewDiadocBoxIdList' => ['bool'],
        'viewContractList' => ['bool'],
        'viewContractConclusion' => ['bool'],
        'viewMainSearch' => ['bool'],
        'orderMultiCurrencyParam' => ['bool'],
    ];

    protected static $nullables = [
        'viewMessages' => false,
        'viewCompanySelfBranch' => false,
        'viewCompanyConfirmation' => false,
        'viewUserSelfProfile' => false,
        'viewUserSelfSettings' => false,
        'viewCompanySelfProfile' => false,
        'viewCompanies' => false,
        'viewCompanyCarrierList' => false,
        'viewCompanyConsignorList' => false,
        'viewPartnerContractType' => false,
        'viewPartnerContractTypeList' => false,
        'createPartnerContractType' => false,
        'viewPartners' => false,
        'viewCompanyPartnerList' => false,
        'viewCompanyPartnerInvitationList' => false,
        'viewCompanyBlacklist' => false,
        'viewWorkers' => false,
        'viewWorkerList' => false,
        'viewWorkerCandidateList' => false,
        'createWorker' => false,
        'viewStoragePoints' => false,
        'viewStoragePointList' => false,
        'createStoragePoint' => false,
        'viewTrucks' => false,
        'viewTruckList' => false,
        'createTruck' => false,
        'viewDrivers' => false,
        'viewDriverList' => false,
        'createDriver' => false,
        'viewDriverAppDetail' => false,
        'createDriverAppInvite' => false,
        'viewOrderTrackingList' => false,
        'createOrderTracking' => false,
        'viewProfileDocuments' => false,
        'viewProfileDocumentList' => false,
        'createProfileDocument' => false,
        'viewOrders' => false,
        'viewConsignorShippingWorkingList' => false,
        'viewConsignorShippingArchivedList' => false,
        'viewConsignorShipping' => false,
        'viewConsignorOrders' => false,
        'viewCarrierOrders' => false,
        'viewGeneralPartnerOrders' => false,
        'viewOrderCarrierListBidding' => false,
        'viewOrderCarrierListMarked' => false,
        'viewOrderCarrierListOffer' => false,
        'viewOrderCarrierListWorking' => false,
        'viewOrderCarrierListCompleted' => false,
        'viewOrderCarrierListArchived' => false,
        'viewOrderConsignorListBidding' => false,
        'viewOrderConsignorListBiddingAll' => false,
        'viewOrderConsignorListDraft' => false,
        'viewOrderConsignorListModeration' => false,
        'viewOrderConsignorListOffer' => false,
        'viewOrderConsignorListWorking' => false,
        'viewOrderConsignorListCompleted' => false,
        'viewOrderConsignorListArchived' => false,
        'viewOrderExpeditorListArchived' => false,
        'viewOrderGeneralPartnerListBidding' => false,
        'viewOrderGeneralPartnerListCorrectionRequest' => false,
        'viewOrderGeneralPartnerListModerate' => false,
        'viewOrderGeneralPartnerListWorking' => false,
        'viewOrderGeneralPartnerListArchived' => false,
        'viewOrderShowcase' => false,
        'viewOrderCreateButton' => false,
        'createOrderDraftFtl' => false,
        'createOrderDraft' => false,
        'createOrderDraftDirect' => false,
        'createOrderDraftProject' => false,
        'createOrderDraftFtlGp' => false,
        'createOrderDraftOffer' => false,
        'viewExpeditorProposals' => false,
        'viewExpeditorProposalProxySignList' => false,
        'viewExpeditorProposalWorkingList' => false,
        'viewExpeditorProposalArchiveList' => false,
        'viewExpeditorProposalCorrectionList' => false,
        'createOrderExpeditorProposal' => false,
        'createOrderExpeditorProposalFixedPriceExpress' => false,
        'createOrderExpeditorProposalFixedPriceAuction' => false,
        'importOrders' => false,
        'exportOrders' => false,
        'exportOrderOffers' => false,
        'viewOrderBroker' => false,
        'viewTenders' => false,
        'viewTenderCarrierPriceRequestLotList' => false,
        'viewTenderCarrierCompletedPriceRequestLotList' => false,
        'viewTenderConsignorDraftList' => false,
        'viewTenderConsignorPriceRequestList' => false,
        'viewTenderConsignorCompletedList' => false,
        'createTenderDraft' => false,
        'viewAdmin' => false,
        'viewBookingShowcase' => false,
        'viewLandingExpress' => false,
        'viewLandingForCarrier' => false,
        'viewLandingForConsignor' => false,
        'createPriceLocal' => false,
        'viewPriceLocalList' => false,
        'createPriceLocalPool' => false,
        'viewPriceLocalPoolList' => false,
        'viewStoragePointEmails' => false,
        'updateStoragePointEmails' => false,
        'updateStoragePointEdmParam' => false,
        'viewDiadocBoxIdList' => false,
        'viewContractList' => false,
        'viewContractConclusion' => false,
        'viewMainSearch' => false,
        'orderMultiCurrencyParam' => false,
    ];
}
