# # ExpeditorProposalConsignorExpeditorPaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | Номер документа-основания |
**date** | **\DateTime** | Дата документа-основания YYYY-MM-DD |
**status** | [**\MagDv\Cargomart\Dto\InvoiceStatusEnum**](InvoiceStatusEnum.md) |  |
**status_date_time** | **\DateTime** | Дата смены статуса в 1С по UTC+0 времени YYYY-MM-DD HH:II:SS+00 |
**value** | **string** | Общая сумма оплаты по счёту |
**transactions** | [**\MagDv\Cargomart\Dto\PaymentTransaction[]**](PaymentTransaction.md) | Отдельные платежи оплаты по счёту |
**version** | **int** | Идентификатор версии черновика, требуется для оптимистичной блокировки | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
