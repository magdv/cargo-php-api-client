# # Document

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Id типа |
**client_id** | **int** | Id компании, которой принадлежит документ | [optional]
**company_id** | **string** | Id компании, которой принадлежит документ |
**type_id** | **int** | Id типа документа |
**title** | **string** | Наименование документа |
**status** | **int** | Статус документа |
**size** | **int** | Размер документа (в байтах) |
**file_id** | **int[]** |  |
**files** | [**\MagDv\Cargomart\Dto\FileV1[]**](FileV1.md) | Файлы документа | [optional]
**url** | **string** | Ссылка на скачивание документа |
**public_url** | **string** | Публичная ссылка на скачивание документа | [optional]
**creator_id** | **int** | Идентификатор создателя документа |
**create_date** | **\DateTime** | Дата создания документа |
**is_shared** | **bool** | Флаг наличия общего доступа к документу | [default to false]
**access** | [**\MagDv\Cargomart\Dto\DocumentAccess**](DocumentAccess.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
