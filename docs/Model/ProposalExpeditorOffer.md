# # ProposalExpeditorOffer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор предложения |
**carrier_id** | **string** | Id перевозчика |
**creator_id** | **int** | Идентификатор пользователя, оставившего предложение |
**consignor_price** | [**\MagDv\Cargomart\Dto\PayValue**](.md) | Цена для отправителя, как он её видит |
**carrier_price** | [**\MagDv\Cargomart\Dto\PayValue**](.md) | Цена для перевозчика, как он её видит |
**load_date_time** | [**\MagDv\Cargomart\Dto\DateTimeSeparate**](DateTimeSeparate.md) | Дата и время погрузки, предложенная перевозчиком | [optional]
**update_date** | **\DateTime** | Дата последнего изменения цены в предложении |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
