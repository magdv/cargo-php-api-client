# # CompanyBranch

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор дочерней компании |
**uuid** | **string** | Идентификатор дочерней компании. UUID | [optional]
**company_id** | **string** | Хэш родительской компании |
**title** | **string** | Название юридического лица |
**legal_address** | **string** | Юридический адрес | [optional]
**inn** | **string** | ИНН | [optional]
**kpp** | **string** | КПП | [optional]
**is_with_vat** | **bool** | Флаг того что компания работает с НДС | [optional] [default to false]
**is_main** | **bool** | Является ли головной компанией | [optional] [default to false]
**full_title** | **string** | Полное название юридического лица | [optional]
**phone** | **string** | Телефон | [optional]
**legal_form** | [**\MagDv\Cargomart\Dto\LegalFormEnum**](LegalFormEnum.md) | Форма организации предприятия | [optional]
**country_code** | **string** | Код страны | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
