# # ProposalCarrier

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier_id** | **string** | Id перевозчика |
**status** | **int** | Статус |
**legal_address** | **string** | Юридический адрес компании | [optional]
**inn** | **string** | ИНН компании перевозчика | [optional]
**kpp** | **string** | КПП компании перевозчика | [optional]
**curators** | **int[]** | Список идентификаторов контактных лиц |
**banking_details** | [**\MagDv\Cargomart\Dto\BankingDetails**](BankingDetails.md) | Банковские реквизиты |
**original_document** | [**\MagDv\Cargomart\Dto\OriginalDocument**](OriginalDocument.md) | Статус отправленных оригиналов документов | [optional]
**driver** | [**\MagDv\Cargomart\Dto\ProposalDriver**](ProposalDriver.md) | Водитель | [optional]
**attached_truck_date** | **\DateTime** | Дата и время назначения машины на заказ | [optional]
**truck** | [**\MagDv\Cargomart\Dto\ProposalTruck**](ProposalTruck.md) | Транспортные средства, назначенные на заказ | [optional]
**document_package** | [**\MagDv\Cargomart\Dto\OrderDocumentPackage**](OrderDocumentPackage.md) | Пакет документов | [optional]
**payment_type** | [**\MagDv\Cargomart\Dto\ProposalCarrierPaymentTypeEnum**](ProposalCarrierPaymentTypeEnum.md) |  | [optional]
**expeditor_contract** | [**\MagDv\Cargomart\Dto\ExpeditorContract**](ExpeditorContract.md) | Данные договора | [optional]
**paid_expeditor_payment_date** | **\DateTime** | Дата оплаты заказа перевозчику | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
