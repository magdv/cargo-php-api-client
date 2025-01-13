# # TenderDraft

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор черновика тендера |
**version** | **int** | Идентификатор версии черновика, требуется для оптимистичной блокировки |
**status_id** | **int** | Идентификатор статуса черновика | [optional]
**trade_date_range** | [**\MagDv\Cargomart\Dto\DateRange**](DateRange.md) | Диапазон проведения торгов | [optional]
**permission** | [**\MagDv\Cargomart\Dto\TenderPermission**](TenderPermission.md) | Информация о доступе к  тендеру | [optional]
**info** | [**\MagDv\Cargomart\Dto\TenderInfo**](TenderInfo.md) | Информация по тендеру | [optional]
**lot** | [**\MagDv\Cargomart\Dto\TenderDraftLot[]**](TenderDraftLot.md) | Список лотов | [optional]
**create_date** | **\DateTime** | Дата создания объекта | [optional]
**access** | [**\MagDv\Cargomart\Dto\TenderDraftAccess**](TenderDraftAccess.md) | Описание доступов к черновику тендера | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
