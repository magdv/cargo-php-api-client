# # ChatPostPayloadOrderPatchNewValues

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\MagDv\Cargomart\Dto\OrderPatchDiffValuesEnum**](OrderPatchDiffValuesEnum.md) |  | [optional]
**consignor_price** | **string** | Цена для отправителя | [optional]
**consignor_price_vat_less** | **string** | Цена для отправителя без НДС | [optional]
**carrier_price** | **string** | Цена для перевозчика | [optional]
**carrier_price_vat_less** | **string** | Цена для перевозчика без НДС | [optional]
**currency_code** | **string** | Код валюты заказа | [optional]
**truck_type_id** | **int** | Идентификатор типа транспорта | [optional]
**company_branch_id** | **int** |  | [optional]
**cargo_weight** | **float** | Тоннаж авто из условий заказа(в тоннах) | [optional]
**cargo_capacity** | **int** | Кубатура авто из условий заказа(в м3) | [optional]
**load_weight** | **float** | Вес груза(в тоннах) | [optional]
**load_capacity** | **int** | Объём груза(в м3) | [optional]
**cargo_type** | **string** | Описание груза | [optional]
**temperature** | [**\MagDv\Cargomart\Dto\TemperatureRange**](TemperatureRange.md) | Температурный режим в цельсиях | [optional]
**loading** | **int[]** | Требуемые типы погрузки-выгрузки | [optional]
**device** | **string[]** | Дополнительное оборудование машины | [optional]
**conditions** | **string[]** | Условия перевозки | [optional]
**comment** | **string** | Комментарий | [optional]
**point** | [**\MagDv\Cargomart\Dto\OrderPatchRoutePointCard[]**](OrderPatchRoutePointCard.md) | Список маршрутных точек заказа | [optional]
**external_id** | **string** | Внешний идентификатор заказа | [optional]
**tag** | **string[]** | Тэги для заказа | [optional]
**truck** | [**\MagDv\Cargomart\Dto\OrderTruck**](.md) | Информация о ТС | [optional]
**driver** | [**\MagDv\Cargomart\Dto\OrderDriver**](.md) | Информация о водителе | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
