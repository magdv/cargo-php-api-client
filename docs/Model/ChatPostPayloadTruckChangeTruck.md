# # ChatPostPayloadTruckChangeTruck

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**manufacturer** | **string** | @deprecated Использовать tractor, trailer, van. Марка ТС | [optional]
**number** | **string** | @deprecated Использовать tractor, trailer, van. Гос.номер ТС | [optional]
**manufacturer_trailer** | **string** | @deprecated Использовать tractor, trailer, van. Марка прицепа ТС | [optional]
**number_trailer** | **string** | @deprecated Использовать tractor, trailer, van. Гос.номер прицепа ТС | [optional]
**carrying_capacity** | **float** | @deprecated Использовать trailer, van. Грузоподъемность ТС | [optional]
**cubic_capacity** | **float** | @deprecated Использовать trailer, van. Кубатура ТС | [optional]
**type_id** | **int** | @deprecated Использовать trailer, van. Тип кузова | [optional]
**mode_id** | **int** | Тип ТС | [optional]
**ownership_type** | [**\MagDv\Cargomart\Dto\TruckOwnershipType**](TruckOwnershipType.md) | @deprecated Будет приходить внутри tractor и trailer Тип владения (owned - Собственность, leasing - Лизинг, rent - Аренда, joint_property_spouses - Совместная собственность супругов, free_use - Безвозмездное пользование) | [optional]
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
**phones** | **string[]** | Список телефонов ТС. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
