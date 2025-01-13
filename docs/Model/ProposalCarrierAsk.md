# # ProposalCarrierAsk

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор ставки перевозчика |
**company_id** | **string** | Идентификатор компании перевозчика, создавшего ставку |
**status** | [**\MagDv\Cargomart\Dto\CarrierAskStatus**](CarrierAskStatus.md) |  |
**price** | [**\MagDv\Cargomart\Dto\PayValue**](.md) | @deprecated Предложенный объект цены. Вместо данного поля использовать consignorPrice или carrierPrice |
**consignor_price** | [**\MagDv\Cargomart\Dto\PayValue**](.md) | Цена для отправителя, как он её видит |
**carrier_price** | [**\MagDv\Cargomart\Dto\PayValue**](.md) | Цена для перевозчика, как он её видит |
**is_carrier_with_vat** | **bool** | Платит ли перевозчик НДС | [default to false]
**expiration_date_time** | **\DateTime** | Дата и время, до которых ставка перевозчика действительна | [optional]
**updater_id** | **int** | Идентификатор профиля из компании перевозчика, изменившего ставку |
**update_date** | **\DateTime** | Дата последнего изменения ставки |
**access** | [**\MagDv\Cargomart\Dto\CarrierAskAccess**](CarrierAskAccess.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
