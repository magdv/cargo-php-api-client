# # OrderDraftRoutePoint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор редактируемой маршрутной точки | [optional]
**storage** | [**\MagDv\Cargomart\Dto\StoragePointItemDiff**](StoragePointItemDiff.md) | Данные склада маршрутного пункта | [optional]
**type** | [**\MagDv\Cargomart\Dto\RoutePointType**](RoutePointType.md) | Тип точки | [optional]
**from_date** | **\DateTime** | Диапазон дат на пункте маршрута ОТ. YYYY-MM-DD | [optional]
**from_time** | **string** | Время работы пункта маршрута ОТ. ЧЧ:ММ:СС | [optional]
**to_time** | **string** | Время работы пункта маршрута ДО. ЧЧ:ММ:СС | [optional]
**is_according_to_work_schedule** | **bool** | Флаг времени подачи машины по графику работы пункта | [optional] [default to false]
**additional_info** | **string** | Комментарий к пункту маршрута в заказе | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
