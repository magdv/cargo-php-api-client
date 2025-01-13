# # DriverPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_id** | **string** | Внешний код | [optional]
**name** | **string** | ФИО водителя | [optional]
**birth_date** | **\DateTime** | Дата рождения YYYY-MM-DD | [optional]
**phone** | **string** | Телефон водителя | [optional]
**phones** | **string[]** | Список телефонов водителя. | [optional]
**passport_number** | **string** | Номер(с серией) паспорта | [optional]
**passport_issue_date** | **\DateTime** | Дата выдачи паспорта YYYY-MM-DD | [optional]
**passport_issue_by** | **string** | Орган, выдавший паспорт | [optional]
**passport_type** | [**\MagDv\Cargomart\Dto\PassportType**](PassportType.md) | Тип паспорта | [optional]
**registration_address** | **string** | Адрес регистрации | [optional]
**licence_number** | **string** | Номер водительского удостоверения | [optional]
**licence_issue_date** | **\DateTime** | Дата выдачи водительского удостоверения YYYY-MM-DD | [optional]
**licence_type** | [**\MagDv\Cargomart\Dto\LicenseType**](LicenseType.md) | Тип водительского удостоверения | [optional]
**licence_series** | **string** | Серия водительского удостоверения | [optional]
**inn** | **string** | ИНН водителя | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
