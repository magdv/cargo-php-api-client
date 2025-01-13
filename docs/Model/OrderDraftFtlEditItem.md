# # OrderDraftFtlEditItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор черновика |
**order_id** | **string** | Идентификатор заказа | [optional]
**repeated_order_id** | **string** | Идентификатор заказа для переразмещения | [optional]
**copied_order_id** | **string** | Идентификатор заказа для копирования | [optional]
**serial_id** | **int** | Порядковый номер заказа | [optional]
**status_id** | **int** | Статуса заказа | [optional]
**ext_status_id** | **int** | Расширенный статус заказа | [optional]
**version** | **int** | Идентификатор версии черновика, требуется для оптимистичной блокировки | [optional]
**carriage_detail** | **string** | Доп. информация к условиям перевозки | [optional]
**consignor_id** | **string** | Идентификатор отправителя |
**company_branch_id** | **int** | Идентификатор дочерней компании | [optional]
**contact** | **int[]** | Список идентификаторов контактных лиц(кураторы) |
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
**is_multi_currency** | **bool** | Флаг мультивалютности | [optional] [default to false]
**vat_rate** | **float** | Ставка НДС |
**price_type** | **string** | Тип цены |
**open_price** | **string** | Начальная цена заказа | [optional]
**step_bid** | **string** | Шаг изменения цены заказа | [optional]
**bidding_type** | [**\MagDv\Cargomart\Dto\OrderBiddingType**](OrderBiddingType.md) |  | [optional]
**bidding_start_date** | **\DateTime** | Начальная дата торгов | [optional]
**bidding_end_date** | **\DateTime** | Конечная дата торгов | [optional]
**bidding_duration** | **int** | Продолжительность торгов | [optional]
**access_type_id** | [**\MagDv\Cargomart\Dto\OrderAccessType**](OrderAccessType.md) |  | [optional]
**access_client** | **string[]** | Список ID компаний |
**contract_type_id** | **int** | Идентификатор типа договора партнерства, учитывается при accessTypeId &#x3D; prt_contract_exclude | [optional]
**tag** | **string[]** | Метки |
**access** | [**\MagDv\Cargomart\Dto\OrderDraftFtlAccess**](OrderDraftFtlAccess.md) | Описание доступных действий по объекту. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
