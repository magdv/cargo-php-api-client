# # OrderReusePoint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**storage** | [**\MagDv\Cargomart\Dto\StoragePointItemPenaltyCalculable**](StoragePointItemPenaltyCalculable.md) | Данные склада |
**type** | [**\MagDv\Cargomart\Dto\RoutePointType**](RoutePointType.md) | Тип точки |
**from_date** | **\DateTime** | Дата работы на пункте ОТ. YYYY-MM-DD | [optional]
**from_time** | **string** | Время работы на пункте маршрута ОТ. HH:mm::ss | [optional]
**to_date** | **\DateTime** | Дата работы на пункте ДО. YYYY-MM-DD | [optional]
**to_time** | **string** | Время работы на пункте маршрута ДО. HH:mm:ss | [optional]
**is_according_to_work_schedule** | **bool** | Флаг времени подачи машины по графику работы пункта | [optional] [default to false]
**additional_info** | **string** | Комментарий к пункту маршрута в заказе | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
