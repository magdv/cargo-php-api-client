# # OrderRoadmapItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор роадмап |
**type** | [**\MagDv\Cargomart\Dto\OrderRoadmapType**](OrderRoadmapType.md) | Тип события роадмап |
**is_done** | **bool** | Завершен | [default to false]
**is_current** | **bool** | Текущий | [default to false]
**is_need_action** | **bool** | Требуется действие | [optional] [default to false]
**is_dynamic** | **bool** | Динамический тип | [optional] [default to false]
**text** | **string** | Заголовок элемента роадмап |
**level** | **int** | Уровень вложенности |
**access** | [**\MagDv\Cargomart\Dto\RoadmapAccess**](RoadmapAccess.md) | Описание доступных действий по объекту | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
