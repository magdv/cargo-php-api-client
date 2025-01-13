# # ApiV2TruckPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**truck_manufacturer** | **string** | марка ТС | [optional]
**truck_number** | **string** | гос.номер ТС | [optional]
**truck_manufacturer_trailer** | **string** | марка прицепа ТС | [optional]
**truck_number_trailer** | **string** | гос.номер прицепа ТС | [optional]
**truck_carrying_capacity** | **float** | грузоподъемность ТС | [optional]
**truck_cubic_capacity** | **float** | кубатура ТС | [optional]
**truck_type_id** | **int** | тип кузова | [optional]
**mode_id** | **int** | тип ТС |
**ownership_type** | [**\MagDv\Cargomart\Dto\TruckOwnershipType**](TruckOwnershipType.md) | Тип владения (owned - Собственность, leasing - Лизинг, rent - Аренда, joint_property_spouses - Совместная собственность супругов, free_use - Безвозмездное пользование) | [optional]
**ownership_type_document_name** | **string** | Наименование документа в зависимости от типа владения | [optional]
**ownership_type_document_number** | **string** | Номер документа в зависимости от типа владения | [optional]
**ownership_type_document_date** | **\DateTime** | Дата документа в зависимости от типа владения | [optional]
**validation_status** | [**\MagDv\Cargomart\Dto\TruckValidationStatus**](TruckValidationStatus.md) |  | [optional]
**affiliation_type** | [**\MagDv\Cargomart\Dto\TruckAffiliationType**](TruckAffiliationType.md) |  | [optional]
**company_owner_country_code** | **string** | Код страны организации владельца ТС (RUS - Россия, XXX - другая) | [optional]
**owner_country_code** | **string** | Код страны компании фактического перевозчика | [optional]
**company_owner_inn** | **string** | ИНН организации владельца ТС | [optional]
**company_owner_name** | **string** | Наименование организации владельца ТС | [optional]
**company_owner_address** | **string** | Юридический адрес компании владельца ТС | [optional]
**phones** | **string[]** | Список телефонов ТС. Не больше 10 номеров. | [optional]
**pts_file_ids** | **int[]** | Идентфикаторы файлов ПТС | [optional]
**is_tracking_allowed** | **bool** | Возможность создавать на машину фильтр на отслеживание заказов | [optional] [default to false]
**tractor** | [**\MagDv\Cargomart\Dto\TractorVehicle**](TractorVehicle.md) | Данные тягача | [optional]
**trailer** | [**\MagDv\Cargomart\Dto\Vehicle**](Vehicle.md) | Данные прицепа | [optional]
**van** | [**\MagDv\Cargomart\Dto\Vehicle**](Vehicle.md) | Данные фургона | [optional]
**actual_carrier** | [**\MagDv\Cargomart\Dto\ActualCarrier**](ActualCarrier.md) | Фактический перевозчик | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
