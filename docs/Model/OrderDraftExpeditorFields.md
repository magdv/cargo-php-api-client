# # OrderDraftExpeditorFields

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kind** | **string** | Тип черновика expeditor | [default to 'expeditor']
**price_strategy_type** | [**\MagDv\Cargomart\Dto\OrderPriceStrategyType**](OrderPriceStrategyType.md) |  | [optional]
**loading** | **int[]** | Требуемые типы погрузки-выгрузки | [optional]
**device** | **string[]** | Дополнительное оборудование машины | [optional]
**repeated_order_id** | **string** | Идентификатор заказа для переразмещения | [optional]
**copied_order_id** | **string** | Идентификатор заказа скопированного заказа | [optional]
**carriage_detail** | **string** | Доп. информация к условиям перевозки | [optional]
**company_branch_id** | **int** | Идентификатор дочерней компании | [optional]
**contact** | **int[]** | Список идентификаторов контактных лиц(кураторы) | [optional]
**external_id** | **string** | Внешний идентификатор | [optional]
**route_point** | [**\MagDv\Cargomart\Dto\OrderDraftRoutePoint[]**](OrderDraftRoutePoint.md) |  | [optional]
**truck_type_id** | **int** | Тип грузовика | [optional]
**cargo_weight** | **float** | Тоннаж авто из условий заказа(в тоннах) | [optional]
**cargo_capacity** | **int** | Кубатура авто из условий заказа(в м3) | [optional]
**load_weight** | **float** | Вес груза(в тоннах) | [optional]
**load_capacity** | **int** | Объём груза(в м3) | [optional]
**cargo_type** | **string** | Описание груза | [optional]
**temperature** | [**\MagDv\Cargomart\Dto\TemperatureRange**](TemperatureRange.md) | Температурный режим в цельсиях | [optional]
**conditions** | **string[]** | Условия перевозки | [optional]
**payment_type_id** | **int** | Идентификатор способа оплаты заказа | [optional]
**payment_detail** | **string** | Комментарий по оплате | [optional]
**currency_code** | **string** | Код валюты заказа | [optional]
**vat_rate** | **float** | Ставка НДС | [optional]
**bidding_end_date** | **\DateTime** | Конечная дата торгов | [optional]
**tag** | **string[]** | Метки | [optional]
**price** | **string** | Цена перевозки с НДС (начальная или фиксированная) | [optional]
**step_bid** | **string** | Шаг изменения цены заказа | [optional]
**bidding_type** | [**\MagDv\Cargomart\Dto\OrderBiddingType**](OrderBiddingType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
