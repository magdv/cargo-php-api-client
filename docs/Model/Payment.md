# # Payment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | Номер документа-основания |
**date** | **\DateTime** | Дата документа-основания YYYY-MM-DD |
**type** | [**\MagDv\Cargomart\Dto\PaymentTypeEnum**](PaymentTypeEnum.md) |  |
**status** | [**\MagDv\Cargomart\Dto\InvoiceStatusEnum**](InvoiceStatusEnum.md) |  |
**value** | **string** | Общая сумма оплаты по счёту |
**transactions** | [**\MagDv\Cargomart\Dto\PaymentTransaction[]**](PaymentTransaction.md) | Отдельные платежи оплаты по счёту |
**version** | **int** | Идентификатор версии черновика, требуется для оптимистичной блокировки | [optional]
**access** | [**\MagDv\Cargomart\Dto\PaymentAccess**](PaymentAccess.md) | Объект доступа |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
