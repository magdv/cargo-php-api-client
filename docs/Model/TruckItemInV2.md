# # TruckItemInV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mode_id** | **int** | тип ТС |
**tractor** | [**\MagDv\Cargomart\Dto\TractorVehicle**](TractorVehicle.md) | Данные тягача | [optional]
**trailer** | [**\MagDv\Cargomart\Dto\Vehicle**](Vehicle.md) | Данные прицепа | [optional]
**van** | [**\MagDv\Cargomart\Dto\Vehicle**](Vehicle.md) | Данные фургона | [optional]
**validation_status** | [**\MagDv\Cargomart\Dto\TruckValidationStatus**](TruckValidationStatus.md) |  | [optional]
**affiliation_type** | [**\MagDv\Cargomart\Dto\TruckAffiliationType**](TruckAffiliationType.md) |  | [optional]
**actual_carrier** | [**\MagDv\Cargomart\Dto\ActualCarrier**](ActualCarrier.md) | Фактический перевозчик | [optional]
**phones** | **string[]** | Список телефонов ТС. Не больше 10 номеров. | [optional]
**pts_file_ids** | **int[]** | Идентфикаторы файлов ПТС | [optional]
**is_tracking_allowed** | **bool** | Возможность создавать на машину фильтр на отслеживание заказов | [optional] [default to false]
**owner_country_code** | **string** | Код страны компании фактического перевозчика | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
