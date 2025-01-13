# # ChatPostPayloadOrderEcnCancel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\MagDv\Cargomart\Dto\ChatPostTypeEnum**](ChatPostTypeEnum.md) | Тип сообщения чата |
**creator_fio** | **string** | ФИО автора |
**event_date** | **\DateTime** | Дата события | [optional]
**ecn_type** | [**\MagDv\Cargomart\Dto\EcnType**](EcnType.md) |  |
**number** | **string** | Номер ТРН |
**ecn_date** | **string** | Дата ТРН. Формат: DD.MM.YYYY. | [optional]
**old_ecn_type** | [**\MagDv\Cargomart\Dto\EcnType**](EcnType.md) |  |
**old_ecn_number** | **string** | Номер отмененной ТРН |
**operator** | [**\MagDv\Cargomart\Dto\EcnOperatorEnum**](EcnOperatorEnum.md) |  | [optional]
**old_ecn_date** | **string** | Дата отмененной ТРН. Формат: DD.MM.YYYY. | [optional]
**old_pdf_version_file** | [**\MagDv\Cargomart\Dto\FileUrl**](FileUrl.md) | Ссылка на скачивание предыдущей версии ТРН |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
