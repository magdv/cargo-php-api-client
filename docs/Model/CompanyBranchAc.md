# # CompanyBranchAc

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор клиента |
**short_name** | **string** | Краткое название организации |
**inn** | **string** | ИНН организации | [optional]
**role** | [**\MagDv\Cargomart\Dto\ClientRoleEnum**](ClientRoleEnum.md) |  |
**status_id** | [**\MagDv\Cargomart\Dto\CompanyStatusEnum**](CompanyStatusEnum.md) |  |
**is_main** | **bool** | Является ли головной компанией | [default to false]
**branch** | [**\MagDv\Cargomart\Dto\CompanyBranchChild[]**](CompanyBranchChild.md) | Список дочерних компаний, если текущая является головной | [optional]
**parent** | [**\MagDv\Cargomart\Dto\IdName**](IdName.md) | Головная компания |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
