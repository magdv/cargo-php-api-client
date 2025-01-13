# # OrderRoutePoint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Id точки |
**storage** | [**\MagDv\Cargomart\Dto\StoragePointItemDiff**](StoragePointItemDiff.md) | Данные склада маршрутного пункта | [optional]
**type** | [**\MagDv\Cargomart\Dto\RoutePointType**](RoutePointType.md) | Тип точки |
**additional_info** | **string** | Комментарий к пункту маршрута в заказе | [optional]
**from_date** | **\DateTime** | Дата работы на пункте. YYYY-MM-DD | [optional]
**from_time** | **string** | Время работы на пункте маршрута ОТ. HH:mm::ss | [optional]
**to_time** | **string** | Время работы на пункте маршрута ДО. HH:mm:ss | [optional]
**is_according_to_work_schedule** | **bool** | Флаг времени подачи машины по графику работы пункта | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
