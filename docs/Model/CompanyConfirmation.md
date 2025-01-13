# # CompanyConfirmation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | [**\MagDv\Cargomart\Dto\CompanyConfirmationStatusEnum**](CompanyConfirmationStatusEnum.md) |  |
**message** | [**\MagDv\Cargomart\Dto\CompanyConfirmationMessage**](CompanyConfirmationMessage.md) |  | [optional]
**owner** | [**\MagDv\Cargomart\Dto\Owner**](Owner.md) |  | [optional]
**contacts** | [**\MagDv\Cargomart\Dto\Contact[]**](Contact.md) | Контакты компании и дублирующих компаний | [optional]
**candidate** | [**\MagDv\Cargomart\Dto\Candidate**](Candidate.md) |  | [optional]
**company** | [**\MagDv\Cargomart\Dto\CompanyConfirmationCompany**](CompanyConfirmationCompany.md) |  | [optional]
**required_docs** | **string[]** | Массив идентификаторов документов | [optional]
**file** | **int[]** | Список идентификаторов прикрепленных файлов | [optional]
**company_profile** | [**\MagDv\Cargomart\Dto\CompanyProfile**](CompanyProfile.md) | Анкета/профиль компании | [optional]
**allow_easy_validation** | **bool** | Флаг, показывающий что включена упрощенная схема валидации | [optional] [default to false]
**consignor_contract_iteration** | **int** | Номер итерации механизма валидации заказчика | [optional]
**access** | [**\MagDv\Cargomart\Dto\CompanyConfirmationAccess**](CompanyConfirmationAccess.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
