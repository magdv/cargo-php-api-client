# # RoutePointShort

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор | [optional]
**title** | **string** | Заголовок пункта маршрута | [optional]
**serial_id** | **int** | Порядковый номер в заказе |
**locality_name** | **string** | Название пункта маршрута | [optional]
**code** | **string** | Кладр код населенного пункта | [optional]
**from_date** | **\DateTime** | Дата на пункте маршрута ОТ | [optional]
**to_date** | **\DateTime** | Дата на пункте маршрута ДО | [optional]
**from_time** | **string** | Время работы пункта маршрута ОТ. HH:mm:ss | [optional]
**to_time** | **string** | Время работы пункта маршрута ДО. HH:mm:ss | [optional]
**is_according_to_work_schedule** | **bool** | Флаг времени подачи машины по графику работы пункта | [optional] [default to false]
**work_schedule** | [**\MagDv\Cargomart\Dto\WorkSchedule**](WorkSchedule.md) |  | [optional]
**additional_info** | **string** | Комментарий к пункту маршрута в заказе | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
