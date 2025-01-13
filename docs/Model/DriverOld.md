# # DriverOld

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | id водителя |
**name** | **string** | ФИО водителя | [optional]
**phone** | **string** | номер телефона | [optional]
**phones** | **string[]** | Список телефонов водителя. | [optional]
**license_number** | **string** | номер водительского удостоверения | [optional]
**licence_issue_date** | **\DateTime** | Дата выдачи водительского удостоверения YYYY-MM-DD | [optional]
**passport_series** | **string** | серия паспорта | [optional]
**passport_number** | **string** | номер паспорта | [optional]
**passport_when** | **\DateTime** | когда выдан паспорт | [optional]
**passport_by** | **string** | кем выдан паспорт | [optional]
**birth_date** | **\DateTime** | Дата рождения YYYY-MM-DD | [optional]
**driver_license** | [**\MagDv\Cargomart\Dto\DriverOldDriverLicenseInner[]**](DriverOldDriverLicenseInner.md) | категории водительских прав водителя | [optional]
**access** | [**\MagDv\Cargomart\Dto\DriverAccess**](DriverAccess.md) | Объект доступа |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
