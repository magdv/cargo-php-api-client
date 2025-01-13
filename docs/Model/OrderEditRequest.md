# # OrderEditRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**comment** | **string** | Коментарий к заказу | [optional]
**truck_type_id** | **int** | Идентификатор типа транспорта | [optional]
**cargo_weight** | **float** | Вес груза в тоннах | [optional]
**cargo_capacity** | **int** | Объём груза в м3 | [optional]
**cargo_type** | **string** | Описание груза | [optional]
**temperature** | [**\MagDv\Cargomart\Dto\TemperatureRange**](TemperatureRange.md) | Температурный режим в кельвинах | [optional]
**loading** | **int[]** | Требуемые типы погрузки-выгрузки | [optional]
**device** | **string[]** | Дополнительное оборудование машины | [optional]
**conditions** | **string[]** | Условия перевозки | [optional]
**payment_type_id** | **int** | Идентификатор способа оплаты заказа | [optional]
**payment_detail** | **string** | Комментарий по оплате | [optional]
**currency_code** | **string** | Код валюты заказа | [optional]
**is_multi_currency** | **bool** | Флаг мультивалютности | [optional] [default to false]
**vat_rate** | **float** | Ставка НДС | [optional]
**open_price** | **string** | Начальная цена заказа | [optional]
**step_bid** | **string** | Шаг измеения цены заказа | [optional]
**is_no_price** | **bool** | Флаг заказ без цены | [optional] [default to false]
**type** | [**\MagDv\Cargomart\Dto\OrderType**](OrderType.md) |  | [optional]
**access_type_id** | [**\MagDv\Cargomart\Dto\OrderAccessType**](OrderAccessType.md) |  | [optional]
**contract_type_id** | **int** | Идентификатор типа договора партнерства, учитывается при accessTypeId &#x3D; prt_contract_exclude | [optional]
**start_date** | **string** | Начальная дата торгов | [optional]
**end_date** | **string** | Конечная дата торгов | [optional]
**duration** | **int** | Продолжительность торгов | [optional]
**name** | **string** | Название шаблона, только для шаблонов | [optional]
**external_id** | **string** | Внешний идентификатор | [optional]
**period_from_date** | **string** | Период исполнения грузоперевозки От | [optional]
**period_to_date** | **string** | Период исполнения грузоперевозки До | [optional]
**price_type** | [**\MagDv\Cargomart\Dto\OrderPriceType**](OrderPriceType.md) |  | [optional]
**car_request** | [**\MagDv\Cargomart\Dto\OrderOfferCarRequest**](OrderOfferCarRequest.md) | Запрос количества машин | [optional]
**company_branch_id** | **int** | Идентификатор дочерней компании | [optional]
**params** | [**\MagDv\Cargomart\Dto\OrderEditParams**](OrderEditParams.md) | Дополнительные параметры/флаги заказа | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
