# # TenderDraftUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | **int** | Идентификатор версии черновика, требуется для оптимистичной блокировки | [optional]
**info** | [**\MagDv\Cargomart\Dto\TenderInfo**](TenderInfo.md) | Информация по тендеру | [optional]
**permission** | [**\MagDv\Cargomart\Dto\TenderPermission**](TenderPermission.md) | Информация о доступе к тендеру | [optional]
**trade_date_range** | [**\MagDv\Cargomart\Dto\DateRange**](DateRange.md) | Диапазон проведения торгов | [optional]
**lot** | [**\MagDv\Cargomart\Dto\TenderDraftLot[]**](TenderDraftLot.md) | Список лотов | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
