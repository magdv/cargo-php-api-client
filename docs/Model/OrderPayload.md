# # OrderPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор заказа | [optional]
**serial_id** | **int** | Порядковый номер заказа |
**status_id** | [**\MagDv\Cargomart\Dto\SearchOrderStatusEnum**](SearchOrderStatusEnum.md) |  |
**external_id** | **string** | Внешний идентификатор | [optional]
**route** | [**\MagDv\Cargomart\Dto\Points[]**](Points.md) | Направление | [optional]
**kind** | [**\MagDv\Cargomart\Dto\OrderKind**](OrderKind.md) | Вид | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
