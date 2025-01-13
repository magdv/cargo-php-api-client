# # OrderAdditionalInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**wealth_by** | **string** | Материальных ценностей по | [optional]
**items** | [**\MagDv\Cargomart\Dto\WealthItem[]**](WealthItem.md) | Список материальных ценностей для таблицы |
**point_index** | **int[]** | Порядковые номера из доступных точек погрузки/выгрузки. Первый индекс - погрузка, последний индекс - выгрузка | [optional]
**is_with_facsimile** | **bool** | С факсимиле | [optional] [default to false]
**is_generate_link** | **bool** | Генерировать ссылку на скачивание доверенности | [optional] [default to false]
**public_link** | [**\MagDv\Cargomart\Dto\OrderPublicLink**](OrderPublicLink.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
