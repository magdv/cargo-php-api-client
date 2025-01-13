# # TenderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор тендера  в статусе &#39;Сбор предложений&#39; |
**serial_id** | **int** | Порядковый номер тендера |
**consignor_id** | **string** | Идентификатор компании |
**trade_date_range** | [**\MagDv\Cargomart\Dto\DateTimeRange**](DateTimeRange.md) | Диапазон проведения торгов |
**permission** | [**\MagDv\Cargomart\Dto\TenderPermission**](TenderPermission.md) | Информация о доступе к  тендеру |
**info** | [**\MagDv\Cargomart\Dto\TenderRequestInfo**](TenderRequestInfo.md) | Информация по тендеру |
**stats** | [**\MagDv\Cargomart\Dto\TenderRequestStats**](TenderRequestStats.md) | Статистика по тендеру |
**access** | [**\MagDv\Cargomart\Dto\TenderRequestAccess**](TenderRequestAccess.md) | Описание доступов к тендеру | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
