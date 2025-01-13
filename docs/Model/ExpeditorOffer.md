# # ExpeditorOffer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | Идентификатор заказа |
**creator_contact** | [**\MagDv\Cargomart\Dto\UserContactShort**](.md) | Контакт пользователя, оставившего предложение | [optional]
**carrier_company** | [**\MagDv\Cargomart\Dto\CompanyShort**](.md) | Компания перевозчика | [optional]
**price** | [**\MagDv\Cargomart\Dto\PayValue**](.md) | Предложенный объект цены |
**count_price_offers** | **int** | Счетчик похожих цен по одному заказу |
**load_date_time** | [**\MagDv\Cargomart\Dto\DateTimeSeparate**](DateTimeSeparate.md) | Дата и время погрузки, предложенная перевозчиком | [optional]
**update_date** | **\DateTime** | Дата последнего изменения цены в предложении |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
