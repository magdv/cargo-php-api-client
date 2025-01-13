# # ContractBankingDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**approve_status** | [**\MagDv\Cargomart\Dto\BankingDetailsApproveStatus**](BankingDetailsApproveStatus.md) |  |
**bank_name** | **string** | Название банка | [optional]
**operating_account** | **string** | Расчетный счет | [optional]
**corresponding_account** | **string** | Корреспондентский счет | [optional]
**bic** | **string** | БИК | [optional]
**is_active** | **bool** | Активна ли запись | [optional] [default to false]
**sign_date** | **\DateTime** | Дата подписания | [optional]
**contract** | [**\MagDv\Cargomart\Dto\ContractDetails**](ContractDetails.md) |  | [optional]
**company** | [**\MagDv\Cargomart\Dto\CompanyDetails**](CompanyDetails.md) |  | [optional]
**certificate** | [**\MagDv\Cargomart\Dto\Certificate**](Certificate.md) | Сертификат | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
