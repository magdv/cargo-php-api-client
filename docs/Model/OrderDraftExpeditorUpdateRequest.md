# # OrderDraftExpeditorUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | **int** | Идентификатор версии черновика, требуется для оптимистичной блокировки | [optional]
**carriage_detail** | **string** | Доп. информация к условиям перевозки | [optional]
**external_id** | **string** | Внешний идентификатор | [optional]
**route_point** | [**\MagDv\Cargomart\Dto\OrderDraftRoutePoint[]**](OrderDraftRoutePoint.md) |  | [optional]
**truck_type_id** | **int** | Тип грузовика | [optional]
**cargo_weight** | **float** | Тоннаж авто из условий заказа(в тоннах) | [optional]
**cargo_capacity** | **int** | Кубатура авто из условий заказа(в м3) | [optional]
**load_weight** | **float** | Вес груза(в тоннах) | [optional]
**load_capacity** | **int** | Объём груза(в м3) | [optional]
**cargo_type** | **string** | Описание груза | [optional]
**price** | **string** | Цена перевозки с НДС | [optional]
**vat_rate** | **float** | Ставка НДС | [optional]
**temperature** | [**\MagDv\Cargomart\Dto\TemperatureRange**](TemperatureRange.md) | Температурный режим в цельсиях | [optional]
**loading** | **int[]** | Требуемые типы погрузки-выгрузки | [optional]
**device** | **string[]** | Дополнительное оборудование машины | [optional]
**conditions** | **string[]** | Условия перевозки | [optional]
**payment_type_id** | **int** | Идентификатор способа оплаты заказа | [optional]
**payment_detail** | **string** | Комментарий по оплате | [optional]
**currency_code** | **string** | Код валюты заказа | [optional]
**company_branch_id** | **int** | Идентификатор дочерней компании | [optional]
**contact** | **int[]** | Список идентификаторов контактных лиц | [optional]
**tag** | **string[]** | Метки | [optional]
**price_strategy_type** | [**\MagDv\Cargomart\Dto\OrderPriceStrategyType**](OrderPriceStrategyType.md) |  | [optional]
**bidding_type** | [**\MagDv\Cargomart\Dto\OrderBiddingType**](OrderBiddingType.md) |  | [optional]
**bidding** | [**\MagDv\Cargomart\Dto\OrderDraftExpeditorBidding**](OrderDraftExpeditorBidding.md) | Настройки торгов | [optional]
**copied_order_id** | **string** | Идентификатор заказа для копирования | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
