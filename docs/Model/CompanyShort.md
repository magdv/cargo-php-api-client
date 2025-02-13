# # CompanyShort

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор (хэш) клиента |
**short_name** | **string** | Краткое название организации | [optional]
**logo** | **string** | Url логотипа | [optional]
**is_with_vat** | **bool** | Наличие НДС | [optional] [default to false]
**is_direct_sender** | **bool** | Являтся прямым отправителем | [optional] [default to false]
**inn** | **string** | ИНН организации | [optional]
**ogrn** | **string** | ОГРН организации | [optional]
**kpp** | **string** | КПП организации | [optional]
**settings** | [**\MagDv\Cargomart\Dto\Settings**](Settings.md) | Настройки компании | [optional]
**status_id** | [**\MagDv\Cargomart\Dto\CompanyStatusEnum**](CompanyStatusEnum.md) |  | [optional]
**session_values** | [**\MagDv\Cargomart\Dto\CompanyShortSessionValues**](CompanyShortSessionValues.md) |  | [optional]
**legal_address** | **string** | Юридический адрес | [optional]
**phone** | **string** | Телефон | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
