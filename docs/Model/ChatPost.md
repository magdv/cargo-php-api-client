# # ChatPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор сообщения |
**company_id** | **string** | Идентификатор компании автора сообщения | [optional]
**creator_id** | **int** | Идентификатор пользователя, автора сообщения | [optional]
**creator** | [**\MagDv\Cargomart\Dto\ChatPostCreator**](ChatPostCreator.md) | Данные пользователя, автора сообщения | [optional]
**kind** | [**\MagDv\Cargomart\Dto\ChatPostKindEnum**](ChatPostKindEnum.md) | Тип записи |
**type** | [**\MagDv\Cargomart\Dto\ChatPostTypeEnum**](ChatPostTypeEnum.md) | Тип сообщения чата |
**payload** | [**\MagDv\Cargomart\Dto\ChatPostPayload**](ChatPostPayload.md) | Дополнительные данные сообщения | [optional]
**message** | **string** | Текст сообщения |
**create_date** | **\DateTime** | Дата создания |
**user_data** | [**\MagDv\Cargomart\Dto\ChatPostUserData**](ChatPostUserData.md) | Данные текущего пользователя по сообщению |
**access** | [**\MagDv\Cargomart\Dto\ChatPostAccess**](ChatPostAccess.md) | Объект доступа |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
