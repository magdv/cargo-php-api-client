# # CarrierAskCurrent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор ставки перевозчика |
**company_id** | **string** | Идентификатор компании перевозчика, создавшего ставку |
**status** | [**\MagDv\Cargomart\Dto\CarrierAskStatus**](CarrierAskStatus.md) |  |
**price** | [**\MagDv\Cargomart\Dto\PayValue**](.md) | Предложенный объект цены |
**is_carrier_with_vat** | **bool** | Платит ли перевозчик НДС | [default to false]
**expiration_date_time** | **\DateTime** | Дата и время, до которых ставка перевозчика действительна | [optional]
**updater_id** | **int** | Идентификатор профиля из компании перевозчика, изменившего ставку |
**update_date** | **\DateTime** | Дата последнего изменения |
**access** | [**\MagDv\Cargomart\Dto\CarrierAskAccess**](CarrierAskAccess.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
