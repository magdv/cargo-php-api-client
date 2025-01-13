# # OrderPointEditRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор редактируемой маршрутной точки | [optional]
**storage_point_id** | **int** | Идентификатор пункта маршрута | [optional]
**is_load** | **bool** | Флаг загрузки в пункте маршрута | [optional] [default to false]
**is_unload** | **bool** | Флаг выгрузки в пункте маршрута | [optional] [default to false]
**from_date** | **\DateTime** | Диапазон дат на пункте маршрута ОТ. YYYY-MM-DD | [optional]
**to_date** | **\DateTime** | Диапазон дат на пункте маршрута ДО. YYYY-MM-DD | [optional]
**from_time** | **string** | Время работы пункта маршрута ОТ. HH:mm | [optional]
**to_time** | **string** | Время работы пункта маршрута ДО. HH:mm | [optional]
**is_according_to_work_schedule** | **bool** | Флаг времени подачи машины по графику работы пункта | [optional] [default to false]
**additional_info** | **string** | Комментарий к пункту маршрута в заказе | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
