# # ExpeditorContractConclusionContractInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tax_system** | [**\MagDv\Cargomart\Dto\TaxSystemType**](TaxSystemType.md) | Система налогообложения |
**carrier_ability** | [**\MagDv\Cargomart\Dto\CarrierAbilityType[]**](CarrierAbilityType.md) | Возможности перевозчика |
**car_total_number** | **int** | Количество машин в организации | [optional]
**actual_address** | **string** | Фактический адрес организации |
**legal_address** | **string** | Адрес регистрации организации | [optional]
**is_equality_legal_and_actual_address** | **bool** | Совпадает ли адрес регистрации с фактическим адресом организации | [optional] [default to false]
**is_international_carriage** | **bool** | Международные перевозки | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
