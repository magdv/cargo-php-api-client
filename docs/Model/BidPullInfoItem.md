# # BidPullInfoItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор заказа |
**end_date** | **\DateTime** | Дата окончания торгов | [optional]
**currency_code** | **string** | Код валюты заказа |
**open_price** | **string** | Цена открытия заказа | [optional]
**current_price** | **string** | Текущая цена заказа | [optional]
**step_bid** | **string** | Шаг ставки | [optional]
**vat_rate** | **float** | Ставка НДС | [optional]
**bid_count** | **int** | Количество ставок на заказ | [optional]
**is_view** | **bool** | Был ли заказ просмотрен | [optional] [default to false]
**is_no_price** | **bool** | Заказ без начальной цены | [optional] [default to false]
**type** | [**\MagDv\Cargomart\Dto\OrderType**](OrderType.md) | Тип заказа |
**is_pin** | **bool** | Заказ закреплен | [optional] [default to false]
**is_last_bid_my** | **bool** | Последняя ставка моей компании | [optional] [default to false]
**is_was_my_bid** | **bool** | Я делал ставку | [optional] [default to false]
**is_current_user_has_bid** | **bool** | Текущий пользователь делал ставку | [optional] [default to false]
**price_type** | [**\MagDv\Cargomart\Dto\OrderPriceType**](OrderPriceType.md) | Тип цены |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
