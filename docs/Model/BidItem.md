# # BidItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор ставки |
**value** | **string** | Размер ставки |
**vat_less_value** | **string** | Ставка отчищенная от НДС | [optional]
**display_value** | **string** | Ставка отображаемая в зависимости от пользователя |
**company_id** | **string** | Идентификатор компании (хэш) | [optional]
**creator_id** | **int** | Создатель ставки | [optional]
**is_win_bid** | **bool** | Является победной ставкой | [optional] [default to false]
**create_date** | **\DateTime** | Дата создания ставки |
**vat_rate** | **float** | Ставка НДС |
**currency_code** | **string** | Код валюты заказа |
**price_type** | [**\MagDv\Cargomart\Dto\OrderPriceType**](OrderPriceType.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
