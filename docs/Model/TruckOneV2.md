# # TruckOneV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | идентификатор ТС |
**manufacturer** | **string** | @deprecated Использовать tractor, trailer, van. Марка ТС | [optional]
**number** | **string** | @deprecated Использовать tractor, trailer, van. Гос.номер ТС | [optional]
**manufacturer_trailer** | **string** | @deprecated Использовать tractor, trailer, van. Марка прицепа ТС | [optional]
**number_trailer** | **string** | @deprecated Использовать tractor, trailer, van. Гос.номер прицепа ТС | [optional]
**carrying_capacity** | **float** | @deprecated Использовать trailer, van. Грузоподъемность ТС | [optional]
**cubic_capacity** | **float** | @deprecated Использовать trailer, van. Кубатура ТС | [optional]
**type_id** | **int** | @deprecated Использовать trailer, van. Тип кузова | [optional]
**model** | **string** | Модель ТС | [optional]
**ownership_type** | [**\MagDv\Cargomart\Dto\TruckOwnershipType**](TruckOwnershipType.md) | @deprecated Использовать ownershipType в tractor, trailer, van. Тип владения (owned - Собственность, leasing - Лизинг, rent - Аренда, joint_property_spouses - Совместная собственность супругов, free_use - Безвозмездное пользование) | [optional]
**tractor** | [**\MagDv\Cargomart\Dto\TractorVehicle**](TractorVehicle.md) | Данные тягача | [optional]
**trailer** | [**\MagDv\Cargomart\Dto\Vehicle**](Vehicle.md) | Данные прицепа | [optional]
**van** | [**\MagDv\Cargomart\Dto\Vehicle**](Vehicle.md) | Данные фургона | [optional]
**validation_status** | [**\MagDv\Cargomart\Dto\TruckValidationStatus**](TruckValidationStatus.md) |  | [optional]
**affiliation_type** | [**\MagDv\Cargomart\Dto\TruckAffiliationType**](TruckAffiliationType.md) |  | [optional]
**company_owner_inn** | **string** | @deprecated будет удалено. юзать actualCarrier | [optional]
**company_owner_name** | **string** | @deprecated будет удалено. юзать actualCarrier | [optional]
**company_owner_address** | **string** | @deprecated будет удалено. юзать actualCarrier | [optional]
**actual_carrier** | [**\MagDv\Cargomart\Dto\ActualCarrier**](ActualCarrier.md) | Фактический перевозчик | [optional]
**company_owner_country_code** | **string** | @deprecated будет удалено. Код страны компании фактического перевозчика | [optional]
**owner_country_code** | **string** | Код страны компании фактического перевозчика | [optional]
**mode_id** | **int** | тип ТС | [optional]
**truck_model** | **string** | модель ТС | [optional]
**phones** | **string[]** | Список телефонов ТС. | [optional]
**pts_file_ids** | **int[]** | Идентфикаторы файлов с ПТС | [optional]
**status** | [**\MagDv\Cargomart\Dto\TruckStatusEnum**](TruckStatusEnum.md) |  | [optional]
**rejection_reason** | **string** | Причина отклонения - возвращется в случае значения поля status &#x3D; 3 | [optional]
**is_tracking_allowed** | **bool** | Возможность создавать на машину фильтр на отслеживание заказов | [optional] [default to false]
**has_tracking_filter** | **bool** | Наличие у машины фильтра по отслеживанию | [optional] [default to false]
**access** | [**\MagDv\Cargomart\Dto\TruckAccess**](TruckAccess.md) | Контекстные права доступа к ТС | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
