# # OrderReuseRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**route_point** | [**\MagDv\Cargomart\Dto\OrderReusePoint[]**](OrderReusePoint.md) |  |
**company_branch_id** | **int** | Идентификатор дочерней компании | [optional]
**truck_type_id** | **int** | Идентификатор типа транспорта |
**temperature** | [**\MagDv\Cargomart\Dto\TemperatureRange**](TemperatureRange.md) |  | [optional]
**device** | **string[]** | Дополнительное оборудование машины | [optional]
**conditions** | **string[]** | Условия перевозки | [optional]
**cargo_type** | **string** | Описание груза | [optional]
**cargo_weight** | **float** | Тоннаж авто из условий заказа(в тоннах) | [optional]
**cargo_capacity** | **int** | Кубатура авто из условий заказа(в м3) | [optional]
**load_weight** | **float** | Вес груза(в тоннах) | [optional]
**load_capacity** | **int** | Объём груза(в м3) | [optional]
**loading** | **int[]** | Требуемые типы погрузки-выгрузки | [optional]
**carriage_detail** | **string** | Информация о заказе | [optional]
**price_strategy_type** | [**\MagDv\Cargomart\Dto\OrderPriceStrategyType**](OrderPriceStrategyType.md) |  |
**bidding_type** | [**\MagDv\Cargomart\Dto\OrderBiddingType**](OrderBiddingType.md) |  |
**bidding** | [**\MagDv\Cargomart\Dto\OrderDraftExpeditorBidding**](OrderDraftExpeditorBidding.md) | Настройки торгов | [optional]
**price** | **string** | Цена перевозки с НДС, если это аукцион/экспресс с ценой заказчика | [optional]
**contact** | **int[]** | Список идентификаторов контактных лиц(кураторы) | [optional]
**tag** | **string[]** | Метки | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
