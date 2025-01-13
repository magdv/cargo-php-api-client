# # Driver

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор водителя |
**external_id** | **string** | Внешний код | [optional]
**name** | **string** | ФИО водителя |
**birth_date** | **\DateTime** | Дата рождения YYYY-MM-DD | [optional]
**phone** | **string** | Телефон водителя | [optional]
**phones** | **string[]** | Список телефонов водителя. | [optional]
**passport_number** | **string** | Номер(с серией) паспорта |
**passport_issue_date** | **\DateTime** | Дата выдачи паспорта YYYY-MM-DD |
**passport_issue_by** | **string** | Орган, выдавший паспорт |
**passport_type** | [**\MagDv\Cargomart\Dto\PassportType**](PassportType.md) | Тип паспорта | [optional]
**registration_address** | **string** | Адрес регистрации | [optional]
**licence_number** | **string** | Номер водительского удостоверения | [optional]
**licence_issue_date** | **\DateTime** | Дата выдачи водительского удостоверения YYYY-MM-DD | [optional]
**licence_type** | [**\MagDv\Cargomart\Dto\LicenseType**](LicenseType.md) | Тип водительского удостоверения | [optional]
**licence_series** | **string** | Серия водительского удостоверения | [optional]
**inn** | **string** | ИНН водителя | [optional]
**validation_status** | [**\MagDv\Cargomart\Dto\DriverValidationStatus**](DriverValidationStatus.md) | Статус валидации данных водителя (0 - undefined, 1 - все данные валидные, 10 - не валидные данные паспорта, 11 не валидные данные телефона, 12 не валидные данные паспорта и телефона, 13 не валидные данные ИНН или ВУ) | [optional]
**driver_app_status** | [**\MagDv\Cargomart\Dto\DriverAppStatus**](DriverAppStatus.md) | Статус наличия &#39;приложения водителя&#39; у водителя | [optional]
**driver_app_detail** | [**\MagDv\Cargomart\Dto\DriverAppDetail[]**](DriverAppDetail.md) | Детализация наличия &#39;приложения водителя&#39; по отдельным номерам телефонов | [optional]
**access** | [**\MagDv\Cargomart\Dto\DriverAccess**](DriverAccess.md) | Объект доступа |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
