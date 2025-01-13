# # OrderDraftExpeditorConditions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vat_rate** | **float** | Ставка НДС |
**payment_details** | **string** | Условия оплаты |
**currency_code** | **string** | Код валюты |
**need_ecn** | **bool** | Электронная транспортная накладная | [optional] [default to false]
**expeditor_contract** | [**\MagDv\Cargomart\Dto\ContractItem**](ContractItem.md) | Данные договора между отправителем и экспедитором | [optional]
**expeditor_contract_conclusion** | [**\MagDv\Cargomart\Dto\ExpeditorContractConclusionSettings**](ExpeditorContractConclusionSettings.md) | Настройки заключения договора с экспедитором | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
