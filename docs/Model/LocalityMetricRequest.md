# # LocalityMetricRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**locality_filter** | [**\MagDv\Cargomart\Dto\LocalityFilterEnum**](LocalityFilterEnum.md) |  |
**locality_sort** | [**\MagDv\Cargomart\Dto\LocalitySortTypeEnum**](LocalitySortTypeEnum.md) |  | [optional]
**page** | **string** | Страница на которой выполняется событие |
**field_name** | **string** | Поле, которое заполняется |
**locality_code** | **string** | Код по КЛАДР выбранного пункта |
**locality_index** | **int** | Позиция выбранного пункта в списке |
**search_query** | **string** | Строка поиска на момент выбора | [optional]
**initial_locality_code** | **string** | Строка поиска на момент фокуса | [optional]
**event_duration** | **int** | Время от получения фокуса на поле до выбора (в секундах) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
