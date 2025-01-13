# # OrderDraftExpeditorEditItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор черновика |
**order_id** | **string** | Идентификатор заказа | [optional]
**serial_id** | **int** | Порядковый номер заказа | [optional]
**copied_order_id** | **string** | Идентификатор заказа для копирования | [optional]
**status_id** | **int** | Статуса заказа | [optional]
**ext_status_id** | **int** | Расширенный статус заказа | [optional]
**version** | **int** | Идентификатор версии черновика, требуется для оптимистичной блокировки | [optional]
**carriage_detail** | **string** | Доп. информация к условиям перевозки | [optional]
**consignor_id** | **string** | Идентификатор отправителя (хэш) |
**company_branch_id** | **int** | Идентификатор дочерней компании | [optional]
**contact** | **int[]** | Список идентификаторов контактных лиц(кураторы) | [optional]
**external_id** | **string** | Внешний идентификатор | [optional]
**route_point** | [**\MagDv\Cargomart\Dto\OrderDraftRoutePoint[]**](OrderDraftRoutePoint.md) |  |
**truck_type_id** | **int** | Тип грузовика | [optional]
**cargo_weight** | **float** | Тоннаж авто из условий заказа(в тоннах) | [optional]
**cargo_capacity** | **int** | Кубатура авто из условий заказа(в м3) | [optional]
**load_weight** | **float** | Вес груза(в тоннах) | [optional]
**load_capacity** | **int** | Объём груза(в м3) | [optional]
**cargo_type** | **string** | Описание груза | [optional]
**temperature** | [**\MagDv\Cargomart\Dto\TemperatureRange**](TemperatureRange.md) | Температурный режим в цельсиях | [optional]
**loading** | **int[]** | Требуемые типы погрузки-выгрузки |
**device** | **string[]** | Дополнительное оборудование машины |
**conditions** | **string[]** | Условия перевозки |
**payment_type_id** | **int** | Идентификатор способа оплаты заказа |
**payment_detail** | **string** | Комментарий по оплате | [optional]
**currency_code** | **string** | Код валюты заказа |
**price** | **string** | Цена перевозки с НДС | [optional]
**vat_rate** | **float** | Ставка НДС |
**tag** | **string[]** | Метки |
**price_strategy_type** | [**\MagDv\Cargomart\Dto\OrderPriceStrategyType**](OrderPriceStrategyType.md) |  | [optional]
**bidding_type** | [**\MagDv\Cargomart\Dto\OrderBiddingType**](OrderBiddingType.md) |  | [optional]
**bidding** | [**\MagDv\Cargomart\Dto\OrderDraftExpeditorBidding**](OrderDraftExpeditorBidding.md) | Настройки торгов | [optional]
**access** | [**\MagDv\Cargomart\Dto\OrderDraftFtlAccess**](OrderDraftFtlAccess.md) | Описание доступных действий по объекту. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
