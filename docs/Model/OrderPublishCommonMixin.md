# # OrderPublishCommonMixin

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
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

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
