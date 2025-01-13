# # OrderPublishExpeditorFields

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kind** | **string** | Тип черновика expeditor | [default to 'expeditor']
**cargo_weight** | **float** | Тоннаж авто из условий заказа(в тоннах) |
**cargo_capacity** | **int** | Кубатура авто из условий заказа(в м3) |
**price_strategy_type** | [**\MagDv\Cargomart\Dto\OrderPriceStrategyType**](OrderPriceStrategyType.md) |  |
**loading** | **int[]** | Требуемые типы погрузки-выгрузки |
**device** | **string[]** | Дополнительное оборудование машины |
**repeated_order_id** | **string** | Идентификатор заказа для переразмещения | [optional]
**copied_order_id** | **string** | Идентификатор заказа скопированного заказа | [optional]
**carriage_detail** | **string** | Доп. информация к условиям перевозки | [optional]
**company_branch_id** | **int** | Идентификатор дочерней компании |
**contact** | **int[]** | Список идентификаторов контактных лиц(кураторы) |
**external_id** | **string** | Внешний идентификатор | [optional]
**route_point** | [**\MagDv\Cargomart\Dto\OrderDraftRoutePoint[]**](OrderDraftRoutePoint.md) |  |
**truck_type_id** | **int** | Тип грузовика |
**load_weight** | **float** | Вес груза(в тоннах) |
**load_capacity** | **int** | Объём груза(в м3) | [optional]
**cargo_type** | **string** | Описание груза |
**temperature** | [**\MagDv\Cargomart\Dto\TemperatureRange**](TemperatureRange.md) | Температурный режим в цельсиях | [optional]
**conditions** | **string[]** | Условия перевозки |
**payment_type_id** | **int** | Идентификатор способа оплаты заказа |
**payment_detail** | **string** | Комментарий по оплате | [optional]
**currency_code** | **string** | Код валюты заказа |
**vat_rate** | **float** | Ставка НДС |
**bidding_end_date** | **\DateTime** | Конечная дата торгов | [optional]
**tag** | **string[]** | Метки |
**price** | **string** | Цена перевозки с НДС (начальная или фиксированная) | [optional]
**step_bid** | **string** | Шаг изменения цены заказа | [optional]
**bidding_type** | [**\MagDv\Cargomart\Dto\OrderBiddingType**](OrderBiddingType.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
