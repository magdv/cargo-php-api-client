# # Comment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор комментария |
**user_id** | **int** | Идентификатор пользователя (перевозчика), который написал комментарий |
**order_id** | **string** | Идентификатор заказа |
**company_id** | **string** | Идентификатор компании, пользователь которой написал комментарий |
**create_date** | **\DateTime** | Дата написания комментария |
**text** | **string** | Текст комментария |
**reply_user_id** | **int** | Идентификатор пользователя, ответившего на комментарий | [optional]
**reply_date** | **\DateTime** | Дата ответа на комментарий | [optional]
**reply_text** | **string** | Текст ответа на комментарий | [optional]
**access** | [**\MagDv\Cargomart\Dto\CommentAccess**](CommentAccess.md) | Описание доступных действий по комментарию |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
