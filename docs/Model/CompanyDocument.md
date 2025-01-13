# # CompanyDocument

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Id документа |
**company_id** | **string** | Код компании, которой принадлежит документ |
**company_name** | **string** | Наименование компании, которой принадлежит документ |
**title** | **string** | Наименование документа |
**files** | [**\MagDv\Cargomart\Dto\DocumentFile[]**](DocumentFile.md) | Файлы связанные с документом (если есть доступ) | [optional]
**url** | **string** | Ссылка на скачивание документа | [optional]
**create_date** | **string** | Дата создания документа |
**is_shared** | **bool** | Флаг наличия общего доступа к документу | [default to false]
**access** | [**\MagDv\Cargomart\Dto\CompanyDocumentAccess**](CompanyDocumentAccess.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
