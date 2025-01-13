# # TruckOneV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | идентификатор ТС |
**truck_manufacturer** | **string** | марка ТС | [optional]
**truck_number** | **string** | гос.номер ТС | [optional]
**truck_manufacturer_trailer** | **string** | марка прицепа ТС | [optional]
**truck_number_trailer** | **string** | гос.номер прицепа ТС | [optional]
**truck_model** | **string** | модель ТС | [optional]
**truck_carrying_capacity** | **float** | грузоподъемность ТС | [optional]
**truck_cubic_capacity** | **float** | кубатура ТС | [optional]
**truck_type_id** | **int** | тип кузова | [optional]
**ownership_type** | [**\MagDv\Cargomart\Dto\TruckOwnershipType**](TruckOwnershipType.md) | Тип владения (owned - Собственность, leasing - Лизинг, rent - Аренда, joint_property_spouses - Совместная собственность супругов, free_use - Безвозмездное пользование) | [optional]
**ownership_type_document_name** | **string** | Наименование документа в зависимости от типа владения | [optional]
**ownership_type_document_number** | **string** | Номер документа в зависимости от типа владения | [optional]
**ownership_type_document_date** | **\DateTime** | Дата документа в зависимости от типа владения | [optional]
**validation_status** | [**\MagDv\Cargomart\Dto\TruckValidationStatus**](TruckValidationStatus.md) |  | [optional]
**affiliation_type** | [**\MagDv\Cargomart\Dto\TruckAffiliationType**](TruckAffiliationType.md) |  | [optional]
**company_owner_inn** | **string** | ИНН организации владельца ТС | [optional]
**company_owner_name** | **string** | Наименование организации владельца ТС | [optional]
**company_owner_address** | **string** | Юридический адрес компании владельца ТС | [optional]
**company_owner_country_code** | **string** | Код страны компании владельца ТС | [optional]
**owner_country_code** | **string** | Код страны компании фактического перевозчика | [optional]
**holder_inn** | **string** | ИНН арендодателя/лизингодателя/собственника | [optional]
**truck_mode_id** | **int** | тип ТС | [optional]
**phones** | **string[]** | Список телефонов ТС. | [optional]
**pts_file_ids** | **int[]** | Идентфикаторы файлов с ПТС | [optional]
**status** | [**\MagDv\Cargomart\Dto\TruckStatusEnum**](TruckStatusEnum.md) |  | [optional]
**rejection_reason** | **string** | Причина отклонения - возвращается в случае значения поля status &#x3D; 3 | [optional]
**is_tracking_allowed** | **bool** | Возможность создавать на машину фильтр на отслеживание заказов | [optional] [default to false]
**has_tracking_filter** | **bool** | Наличие у машины фильтра по отслеживанию | [optional] [default to false]
**access** | [**\MagDv\Cargomart\Dto\TruckAccess**](TruckAccess.md) | Контекстные права доступа к ТС | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
