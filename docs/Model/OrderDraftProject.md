# # OrderDraftProject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kind** | **string** | Тип черновика project | [default to 'project']
**price_type** | [**\MagDv\Cargomart\Dto\OrderPriceType**](OrderPriceType.md) |  | [optional]
**transportation_period** | [**\MagDv\Cargomart\Dto\DateRange**](DateRange.md) | Период перевозки | [optional]
**bidding_start_date** | **\DateTime** | Начальная дата торгов | [optional]
**bidding_duration** | **int** | Продолжительность торгов | [optional]
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
**access_type_id** | [**\MagDv\Cargomart\Dto\OrderAccessType**](OrderAccessType.md) | Тип доступа к заказу (доступные значения - any_exclude, prt_exclude, prt_contract_exclude) | [optional]
**access_client** | **string[]** | Список ID компаний попадающих в ограничения | [optional]
**contract_type_id** | **int** | Идентификатор типа договора партнерства, учитывается при accessTypeId &#x3D; prt_contract_exclude | [optional]
**price** | **string** | Цена перевозки с НДС (начальная или фиксированная) | [optional]
**step_bid** | **string** | Шаг изменения цены заказа | [optional]
**bidding_type** | [**\MagDv\Cargomart\Dto\OrderBiddingType**](OrderBiddingType.md) |  | [optional]
**id** | **string** | Идентификатор черновика |
**create_date** | **\DateTime** | Дата создания черновика | [optional]
**access** | [**\MagDv\Cargomart\Dto\OrderDraftAccess**](OrderDraftAccess.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
