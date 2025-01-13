# # OrderDriver

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**driver_id** | **int** | Идентификатор водителя | [optional]
**name** | **string** | ФИО водителя |
**phones** | **string[]** | Список телефонов водителя. |
**license_number** | **string** | Номер водительского удостоверения | [optional]
**license_series** | **string** | Серия водительского удостоверения | [optional]
**license_type** | [**\MagDv\Cargomart\Dto\LicenseType**](LicenseType.md) | Тип водительского удостоверения | [optional]
**licence_issue_date** | **\DateTime** | Дата выдачи водительского удостоверения YYYY-MM-DD | [optional]
**inn** | **string** | ИНН водителя | [optional]
**external_id** | **string** | Внешний код | [optional]
**passport_type** | [**\MagDv\Cargomart\Dto\PassportType**](PassportType.md) |  | [optional]
**registration_address** | **string** | Адрес регистрации | [optional]
**passport_series** | **string** | Серия паспорта | [optional]
**passport_number** | **string** | Номер паспорта |
**passport_when** | **\DateTime** | Когда выдан паспорт |
**passport_by** | **string** | Кем выдан паспорт |
**birth_date** | **\DateTime** | Дата рождения | [optional]
**driver_app_status** | [**\MagDv\Cargomart\Dto\DriverAppStatus**](DriverAppStatus.md) | Статус наличия &#39;приложения водителя&#39; у водителя | [optional]
**driver_app_detail** | [**\MagDv\Cargomart\Dto\DriverAppDetail[]**](DriverAppDetail.md) | Детализация наличия &#39;приложения водителя&#39; по отдельным номерам телефонов | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
