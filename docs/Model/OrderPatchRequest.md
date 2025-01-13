# # OrderPatchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**consignor_price** | **string** | Цена для отправителя |
**carrier_price** | **string** | Цена для перевозчика |
**currency_code** | **string** | Код валюты заказа | [optional]
**company_branch_id** | **int** | Идентификатор дочерней компании | [optional]
**cargo_type** | **string** | Описание груза |
**cargo_weight** | **float** | Тоннаж авто из условий заказа(в тоннах) |
**cargo_capacity** | **int** | Кубатура авто из условий заказа(в м3) |
**load_weight** | **float** | Вес груза(в тоннах) | [optional]
**load_capacity** | **int** | Объём груза(в м3) | [optional]
**temperature** | [**\MagDv\Cargomart\Dto\TemperatureRange**](TemperatureRange.md) |  | [optional]
**device** | **string[]** | Дополнительное оборудование машины | [optional]
**conditions** | **string[]** | Условия перевозки | [optional]
**comment** | **string** |  | [optional]
**points** | [**\MagDv\Cargomart\Dto\OrderDraftRoutePoint[]**](OrderDraftRoutePoint.md) | Список маршрутных точек заказа |
**external_id** | **string** | Внешний идентификатор заказа | [optional]
**tag** | **string[]** | Тэги для заказа | [optional]
**comment_for_consignor** | **string** | Комментарий для заказчика |
**comment_for_carrier** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
