# # ProposalRefuse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Наименование отказа |
**type** | [**\MagDv\Cargomart\Dto\ProposalOrderRefuseTypeEnum**](ProposalOrderRefuseTypeEnum.md) |  |
**reason** | **string** | Причина отказа |
**is_actual** | **bool** | Флаг актуальности отказа | [default to false]
**expeditor_note** | **string** | Примечание Экспедитора | [optional]
**client_id** | **int** | @deprecated Идентификатор клиента, создавшего отказ (использовать companyId) | [optional]
**company_id** | **string** | Хэш клиента, создавшего отказ |
**creator_id** | **int** | Идентификатор пользователя, создавшего отказ | [optional]
**create_date** | **\DateTime** | Дата создания отказа |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
